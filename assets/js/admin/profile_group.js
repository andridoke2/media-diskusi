import config from "./config.js";

var vue = new Vue({
	el: "#profile_group",
	data: {
		url: config,
		group: {},
		emptyResult: false,
	},

	created() {
		this.getGroup();
	},

	methods: {
		getGroup() {
			axios.get(this.url + "group/getGroup").then((response) => {
				if (!response.data.status) {
					vue.emptyResult = true;
				} else {
					vue.group = response.data.group;
				}
			});
		},

		gambar(file) {
			return this.url + "assets/img/group/" + file;
		},
	},
});