const Task = require('../models/Task');

module.exports = {
	index: (req, res) => {

		Task.find().then(tasks=>{
			res.render('task/index', {
				'openTasks':tasks.filter(t=>t.status === "Open"),
                'inProgressTasks':tasks.filter(t=>t.status==="In Progress"),
                'finishedTasks':tasks.filter(t=>t.status === "Finished"),
			});
		});

	},
	createGet: (req, res) => {
		res.render('task/create');
	},
	createPost: (req, res) => {
		let taskArgs = req.body;
		if (!taskArgs.title || !taskArgs.status){
			res.redirect('/');
		}
		Task.create(taskArgs).then(task=>{
			res.redirect('/');
		});

	},
	editGet: (req, res) => {
		let id = req.params.id;
		Task.findById(id).then(task=> {
			if (!task) {
				res.redirect('/');
				return;
			}
			res.render('task/edit', task);
		})

	},
	editPost: (req, res) => {
		let id = req.params.id;
		Task.findByIdAndUpdate(id, task, {runValidators: true}).then(task=> {
			res.redirect('/');
		})
	}
};