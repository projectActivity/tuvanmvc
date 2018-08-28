<template>
	<div>

		<div id="createModal" class="modal fade" tabindex="-1" role="dialog">
		  	<div class="modal-dialog">

		    <!-- Modal content-->
			    <div class="modal-content">
			    	<form class="mb-3" @submit.prevent="addUser">
				      	<div class="modal-header">
				        	<h5 class="modal-title" id="exampleModalLabel">Create User</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
				      	</div>
				      	<div class="modal-body">
				        	
								<div class="form-group" >
									<input type="text" :class="{'is-invalid': errors.full_name}" class="form-control" placeholder="Full name" v-model="user.full_name">
									<span v-if="errors.full_name" class="help-block text-danger">{{ errors.full_name[0] }}</span>
								</div>
								<div class="form-group">
									<input type="text" :class="{'is-invalid': errors.email}" class="form-control" placeholder="Email" v-model="user.email">
									<span v-if="errors.email" class="help-block text-danger">{{ errors.email[0] }}</span>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Address" v-model="user.address">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Birthday" v-model="user.birthday">
								</div>
								<div class="form-group">
									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="maleRad" value="1" v-model="user.sex" class="custom-control-input">
										<label class="custom-control-label" for="maleRad">Male</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
									  	<input type="radio" id="femaleRad" value="0" v-model="user.sex" class="custom-control-input">
										<label class="custom-control-label" for="femaleRad">Female</label>
									</div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Phone number" v-model="user.phone">
								</div>
								<select class="form-control form-control-md mb-2" v-model="user.education_id">
								  	<option value="">--- Educations ---</option>
								  	<option 
								  		v-for="edu in educations" 
								  		:value="edu.id">
								  		{{ edu.name }}
								  	</option>
								</select>
								<select class="form-control form-control-md mb-2" v-model="user.position_id">
								  	<option value="">--- Positions ---</option>
								  	<option 
								  		v-for="pos in positions" 
								  		:value="pos.id">
								  		{{ pos.name }}
								  	</option>
								</select>
								<div class="form-group">
									<textarea rows=5 class="form-control" placeholder="Introduction" v-model="user.introduction"></textarea>
								</div>
				      	</div>
					    <div class="modal-footer">
					    	<button class="btn btn-primary" type="submit">Save</button>
				        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					    </div>
					</form>
			    </div>

		  	</div>
		</div>

		<div id="updateModal" class="modal fade" tabindex="-1" role="dialog" >
		  	<div class="modal-dialog">

		    <!-- Modal content-->
			    <div class="modal-content">
			    	<form class="mb-3" @submit.prevent="updateUser">
				      	<div class="modal-header">
				        	<h5 class="modal-title" id="exampleModalLabel">Update User</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
				      	</div>
				      	<div class="modal-body">
				        	
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Full name" v-model="user_update.full_name">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Email" v-model="user_update.email">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Address" v-model="user_update.address">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Birthday" v-model="user_update.birthday">
								</div>
								<div class="form-group">
									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="maleRadUp" value="1" v-model="user_update.sex" class="custom-control-input">
										<label class="custom-control-label" for="maleRad">Male</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
									  	<input type="radio" id="femaleRadUp" value="0" v-model="user_update.sex" class="custom-control-input">
										<label class="custom-control-label" for="femaleRad">Female</label>
									</div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Phone number" v-model="user_update.phone">
								</div>
								<select class="form-control form-control-md mb-2" v-model="user_update.education_id">
								  	<option 
								  		v-for="edu in educations" 
								  		:value="edu.id"
								  		:selected="edu.id == user_update.education_id ? true : false">
								  		{{ edu.name }}
							  		</option>
								</select>
								<select class="form-control form-control-md mb-2" v-model="user_update.position_id">
								  	<option 
								  		v-for="pos in positions" 
								  		:value="pos.id" 
								  		:selected="pos.id == user_update.position_id ? true : false">
								  		{{ pos.name }}
								  	</option>
								</select>
								<div class="form-group">
									<textarea rows=5 class="form-control" placeholder="Introduction" v-model="user_update.introduction"></textarea>
								</div>
								
							
				      	</div>
					    <div class="modal-footer">
					    	<button class="btn btn-primary" type="submit">Update</button>
				        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					    </div>
					</form>
			    </div>

		  	</div>
		</div>
		
		<div class="row">
			<div class="col-md-3">
				<button type="button" @click="createUser()" class="btn btn-primary">Create User</button>
			</div>
			<div class="offset-md-6 col-md-3">
				<nav>
					<ul class="pagination right">
						<li :class="[{disabled: !pagination.prev_page_url }]" class="page-item">
							<a href="#" class="page-link" @click="fetchUsers(pagination.prev_page_url)">Previous</a>
						</li>
						<li class="page-item disabled">
							<a href="#" class="page-link text-dark">Page {{ pagination.current_page }} of {{ pagination.last_page }}</a>
						</li>
						<li :class="[{disabled: !pagination.next_page_url }]" class="page-item">
							<a href="#" class="page-link" @click="fetchUsers(pagination.next_page_url)">Next</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		
		<div class="row mb-2" >
			<table class="table">
				<thead>
				    <tr>
			      		<th scope="col">#</th>
			      		<th scope="col">Full name</th>
			      		<th scope="col">Sex</th>
			      		<th scope="col">Address</th>
			      		<th scope="col">Phone</th>
			      		<th scope="col"></th>
				    </tr>
				</thead>
				<tbody>
					<tr v-for="(user, index) in users" :key="user.id">
						<td>{{ index + 1 }}</td>
						<td>{{ user.full_name }}</td>
						<td>{{ user.sex ? 'Male' : 'Female' }}</td>
						<td>{{ user.address }}</td>
						<td>{{ user.phone }}</td>
						<td>
							<button class="btn btn-warning" @click="editUser(user)">Edit</button>
							<button class="btn btn-danger" @click="deleteUser(user.id)">Delete</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</template>

<script>
	// const axios = require('axios');

	export default {
		data() {
			return {
				errors: [],
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
					position_id: '',
					education_id: ''
				},
				user_update: [],
				positions: [],
				educations: [],
				pagination: {},
			}
		},

		created() {
			this.fetchUsers();
		},

		methods: {
			fetchUsers(page_url) {
				let vm = this;
				page_url = page_url || 'api/users';
				axios.get(page_url)
					.then(function (res) {
						vm.users = res.data.data;
						vm.makePaginations(res.data.meta, res.data.links);
					})
					.catch(function (error) {
						console.log(error);
					});
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

			bindDatas() {
				let vm = this;
				// Bind list Positions
				axios
					.get('api/positions')
					.then(function (res) {
						vm.positions = res.data.data;
					})
					.catch(function (err) {
						console.log(err);
					});

				// Bind list Educations
				axios
					.get('api/educations')
					.then(function (res) {
						vm.educations = res.data.data;
					})
					.catch(function (err) {
						console.log(err);
					});
			},

			deleteUser(id) {
				let vm = this;
				alertify.confirm('Delete', 'Are you sure?', 
					function(){ 
						axios({
							url: `api/user/${id}`,
							method: 'delete'
						})
						.then(function (res){
							vm.$noty.success("Delete successfully!");
							vm.fetchUsers();
						})
						.catch(function (err){
							vm.$noty.error("Error");
						}) 
					}, 
					function(){
						console.log("Huy");
					}
				);
			},

			createUser() {
				this.bindDatas();
				$('#createModal').modal('show');
			},

			addUser() {
				let vm = this;
				// Add
				axios({
					method: 'post',
					url: 'api/user', 
					data: JSON.stringify(this.user),
					headers: {
						'content-type': 'application/json'
					}
				})
				.then(function (res) {
					$('#createModal').modal('hide');
					// this.errors = [];
					vm.user.full_name    = '';
					vm.user.email        = '';
					vm.user.address      = '';
					vm.user.birthday     = '';
					vm.user.sex          = 0;
					vm.user.phone        = '';
					vm.user.introduction = '';
					vm.user.position_id  = '';
					vm.user.education_id = '';
					$('#createModal').modal('hide');
					vm.$noty.success("Add successfully!");
					vm.fetchUsers();
				})
				.catch(error => {
					console.error(error);
				    vm.errors = error.response.data.errors;
				});
			},

			editUser(user) {
				this.bindDatas();
				let vm = this;
				$('#updateModal').modal('show');
				fetch(`api/user/${user.id}/edit`)
				.then(res => res.json())
				.then(res => {
					vm.user_update = res.data;
				})
				.catch(error => {
					this.errors = error.response.data.errors;
				});
			},

			updateUser() {
				// Update
				fetch(`api/user/${this.user_update.id}`, {
					method: 'put',
					body: JSON.stringify(this.user_update),
					headers: {
						'content-type': 'application/json'
					}
				})
				.then(res => res.json())
				.then(data => {
					$('#updateModal').modal('hide');
					this.$noty.success("Update successfully!");
					this.fetchUsers();
				})
				.catch(err => this.$noty.delete(err));
			}
		}
	}
</script>
