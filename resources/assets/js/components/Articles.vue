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
						this.users = res.data;
						vm.makePaginations(res.meta, res.links);
					})
					.catch(err => console.log(err));
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
				if(confirm('Are you sure?')) {
					fetch(`api/user/${id}`, {
						method: 'delete'
					})
					.then(res => res.json())
					.then(data => {
						alert('User removed');
						this.fetchUsers();
					})
					.catch(err => console.log(err))
				}
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
						alert('User Added');
						this.fetchUsers();
					})
					.catch(err => console.log(err))
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
						alert('User Edited');
						this.fetchUsers();
					})
					.catch(err => console.log(err));
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