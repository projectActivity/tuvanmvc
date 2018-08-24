<template>
	<div>
		<h2>Users</h2>
		<form class="mb-3" @submit.prevent="addUser">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Full name" v-model="user.full_name">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Email" v-model="user.email">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Address" v-model="user.address">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Birthday" v-model="user.birthday">
			</div>
			<div class="form-check-inline">
				<label class="form-check-label"><input type="radio" class="form-check-input" value="1" v-model="user.sex">Male</label>
			</div>
			<div class="form-check-inline">
				<label class="form-check-label"><input type="radio" class="form-check-input" value="0" v-model="user.sex">Female</label>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Phone number" v-model="user.phone">
			</div>
			<div class="form-group">
				<textarea rows=5 class="form-control" placeholder="Introduction" v-model="user.introduction"></textarea>
			</div>
			<button class="btn btn-primary btn-block" type="submit">Save</button>
		</form>
		<nav>
			<ul class="pagination">
				<li v-bind:class="[{disabled: !pagination.prev_page_url }]" class="page-item">
					<a href="#" class="page-link" @click="fetchUsers(pagination.prev_page_url)">Previous</a>
				</li>
				<li class="page-item disabled">
					<a href="" class="page-link text-dark">Page {{ pagination.current_page }} of {{ pagination.last_page }}</a>
				</li>
				<li v-bind:class="[{disabled: !pagination.next_page_url }]" class="page-item">
					<a href="#" class="page-link" @click="fetchUsers(pagination.next_page_url)">Next</a>
				</li>
			</ul>
		</nav>
		<div class="card card-body mb-2" v-for="user in users" v-bind:key="user.id">
			<h3>{{ user.full_name }}</h3>
			<p>{{ user.introduction }}</p>
			<p>{{ user.sex ? 'Male' : 'Female' }}</p>
			<hr>
			<button class="btn btn-warning mb-3" @click="editUser(user)">Edit</button>
			<button class="btn btn-danger" @click="deleteUser(user.id)">Delete</button>
		</div>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				users: [],
				user: {
					id: '',
					full_name: '',
					email: '',
					address: '',
					birthday: '',
					sex: 0,
					phone: '',
					introduction: '',
				},
				user_id: '',
				pagination: {},
				edit: false
			}
		},

		created() {
			this.fetchUsers();
		},

		methods: {
			fetchUsers(page_url) {
				let vm = this;
				page_url = page_url || 'api/users';
				fetch(page_url)
					.then(res => res.json())
					.then(res => {
						vm.users = res.data;
						vm.makePaginations(res.meta, res.links);
					})
					.catch(err => vm.$noty.delete(err));
			},

			makePaginations(meta, links) {
				let pagination = {
					current_page: meta.current_page,
					last_page: meta.last_page,
					next_page_url: links.next,
					prev_page_url: links.prev
				}

				this.pagination = pagination;
			},

			deleteUser(id) {
				let vm = this;
				alertify.confirm('Delete', 'Are you sure?', 
					function(){ 
						fetch(`api/user/${id}`, {
							method: 'delete'
						})
						.then(res => res.json())
						.then(data => {
							vm.$noty.info("Delete successfully!");
							vm.fetchUsers();
						})
						.catch(err => vm.$noty.delete(err)) 
					}, 
					function(){ }
				);
			},

			addUser() {
				if(this.edit === false) {
					// Add
					fetch('api/user', {
						method: 'post',
						body: JSON.stringify(this.user),
						headers: {
							'content-type': 'application/json'
						}
					})
					.then(res => res.json())
					.then(data => {
						this.user.full_name = '';
						this.user.email = '';
						this.user.introduction = '';
						this.$noty.info("Add successfully!");
						this.fetchUsers();
					})
					.catch(err => this.$noty.delete(err))
				} else {
					// Update
					fetch(`api/user/${this.user.user_id}`, {
						method: 'put',
						body: JSON.stringify(this.user),
						headers: {
							'content-type': 'application/json'
						}
					})
					.then(res => res.json())
					.then(data => {
						this.user.full_name = '';
						this.user.email = '';
						this.user.introduction = '';
						this.user.phone = '';
						this.user.address = '';
						this.user.birthday = '';
						this.user.sex = '';
						this.user_id = '';
						this.$noty.info("Update successfully!");
						this.fetchUsers();
					})
					.catch(err => this.$noty.delete(err));
				}
			},

			editUser(user) {
				console.log(this.user.id);
				this.edit = true;
				this.user.id = user.id;
				this.user.user_id = user.id;
				this.user.full_name = user.full_name;
				this.user.email = user.email;
				this.user.address = user.address;
				this.user.birthday = user.birthday;
				this.user.introduction = user.introduction;
				this.user.phone = user.phone;
				this.user.sex = user.sex;
			}
		}
	}
</script>