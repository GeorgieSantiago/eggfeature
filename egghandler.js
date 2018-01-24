window.localStorage.clear()
var incubator = {
    eggs: window.localStorage.getItem('eggs') || [{
        'id': 1,
        'name': 'test',
        'steps': 0,
        'max': 3
    }],
    count: 0,
    area: document.getElementsByTagName('body')[0],
    init: function() {
        console.log(this.area)
        console.log(this.eggs)
        var self = this
        this.area.addEventListener('click', function() {
            if (self.eggs) {
                self.eggs.forEach(function(egg) {
                    egg.steps++;
                    console.log(egg)
                    if (egg.steps >= egg.max) {
                        self.eggHatch(egg)
                    }
                })
            }
        })
    },
    eggHatch: function(egg) {
        alert("oh...")
        document.getElementById("eggHatch").modal()
        /*Fill fields here*/
        //TODO fill modal with egg information where id = egg.id
        //  document.getElementById().innerHTML = egg['name']
        //  document.getElementById().innerHTML = egg['count'] + '/' + egg['max']
        console.log(egg.id)
    },
    //TODO send AJAX call to remove egg from egg list
    //TODO respond by removing egg by id from UI
    remove: function(id) {
        console.log(id)
    },
    cleanup: function() {
        window.localStorage.setItem('eggs', this.eggs)
    }
}

window.addEventListener('click', incubator.init())
window.addEventListener('beforeUnload', incubator.cleanup())