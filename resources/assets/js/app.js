
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

window.Event = new class {

	constructor() {

		this.vue = new Vue();
	}

	fire(event, data = null) {

		this.vue.$emit(event, data);

	}

	listen(event, callback) {

		this.vue.$on(event, callback);

	}


}


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));


//TASK component
Vue.component('task', {

	template: '<li><slot></slot></li>'

});


//TASK LIST component
Vue.component('task-list', {

	template: `

		<div>

			<task v-for="task in tasks">{{ task.description }}</task>

		</div>

		`,

	data() { 
		return {

			tasks: [

				{description: 'Go to the store', complete: true},

				{description: 'Go to the email', complete: false},

				{description: 'Go to the farm', complete: true},

				{description: 'Go to the work', complete: false},


			]
		};

	}


});


//TAB component
Vue.component('tab', {

	template: `
		
		<div v-show="isActive">

			<slot></slot>

		</div>


	`,

	props: {

		name: { required: true }, 

		selected: { default: false }
	}, 

	data() { 

		return {

			isActive: false

		}

	}, 

	computed: {

		href() {

			return '#' + this.name.toLowerCase().replace(/ /g, '-');
		}

	},

	mounted() { 

		this.isActive = this.selected;

	}	

});


//TABS component
Vue.component('tabs', {

	template: `

		<div>

			<div class="tabs is-centered">

			  	<ul>
			
				    <li v-for="tab in tabs" :class="{ 'is-active': tab.isActive }">

				    	<a :href="tab.href" @click="selectTab(tab)">{{ tab.name }}</a>

				    </li>

			  	</ul>
			
			</div>

			<div class="tab-details">

				<slot></slot>

			</div>

		</div>

	`, 

	data() {

		return {

			tabs: []
		};

	},

	created() { 

		this.tabs = this.$children;

	}, 

	methods: {

		selectTab(selectedTab) {

			this.tabs.forEach(tab => {

				tab.isActive = (tab.name == selectedTab.name);

			});

		}
	}
	
});



//component for modal
Vue.component('modal', {

 	template: `

 		<div class="modal is-active">
          
             <div class="modal-background" @click = "$emit('close')"></div>
            
                 <div class="modal-content">
                
                     <div class="box">
                        
                        	<slot></slot>

                     </div>

                 </div>
          
             <button class="modal-close is-large" @click = "$emit('close')"></button>

         </div> 
     ` 

 });

//component for message
Vue.component('message', {

	props: ['title', 'body'],

	data() { 

		return {

			isVisible: true

		};
	},

	template: `

		<article class="message" v-show="isVisible">
          
          <div class="message-header">
            
            {{ title }}

            <button class="delete" type="button" @click="isVisible = false">x</button>
          
          </div>
          
          <div class="message-body">
            
            {{ body }}

          </div>
        
        </article>    

    `  
});

//COUPON component
Vue.component('coupon', {

	template: `

		<input placeholder="Enter coupon" @blur="onCouponApplied">

	`,

	methods: {

		onCouponApplied () {

			Event.fire('applied');


		}
	}

});

Vue.component('modal-card', {

	template: `

		<div class="modal is-active">
	          
	            <div class="modal-background"></div>
	            
	                <div class="modal-card">
	                    
	                    <header class="modal-card-head">
	              
	                        <p class="modal-card-title">

								<slot name="header">

									Default Content Header

								</slot>

	                        </p>
	                        
	                        <button class="delete" aria-label="close"></button>
	                    
	                    </header>

	                    <section class="modal-card-body">

	                        <p>

	                        	<slot>

									Default Content Section

	                        	</slot>

	                        </p>

	                    </section>
	                    
	                    <footer class="modal-card-foot">
	                        
	                        <slot name="footer">

								<a class="button is-primary">Okay</a>

	                        </slot>
	                        
	                    </footer>
	                
	                </div>
	            
	        </div>

	`,


});

Vue.component('progress-view', {

	data() {

		return { completionRate: 50 };

	}

});

const app = new Vue({

    el: '#root',

    data: {

		couponApplied: false,
		showModal: false

	}, 

	created() {

		Event.listen('applied', () => this.couponApplied = true);
	}

});

