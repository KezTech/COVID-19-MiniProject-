   var ul = document.getElementById('ul');
   var btn = document.getElementById('button');

   var resultbox = document.getElementById('resultbox');
   var questionBox = document.getElementById('questionBox');

   var op1 = document.getElementById('op1');
   var op2 = document.getElementById('op2');
   var op3 = document.getElementById('op3');
   var op4 = document.getElementById('op4');


   var app = {
     questions: [{
         q: 'Fever (a temperature of 37.8 degrees Celsius or higher)?',
         options: ['Yes', 'No'],
         answer: 1
       },

       {
         q: 'Cough thats new or worsening ?',
         options: ['Yes', 'No'],
         answer: 1
       },

       {
         q: 'Shortness of breath ?',
         options: ['Yes', 'No'],
         answer: 1
       },

       {
         q: 'Sore throat ?',
         options: ['Yes', 'No'],
         answer: 1
       },

       {
         q: 'Difficulty swallowing ?',
         options: ['Yes', 'No'],
         answer: 1
       },

       {
         q: 'Lost sense of taste or smell ?',
         options: ['Yes', 'No'],
         answer: 1
       },

       {
         q: 'Headache ?',
         options: ['Yes', 'No'],
         answer: 1
       },

       {
         q: 'Digestive issues(nausea/vomiting, diarrhea, stomach pain) ?',
         options: ['Yes', 'No'],
         answer: 1
       },

       {
         q: 'Fatigue(lack of energy, extreme tiredness) ?',
         options: ['Yes', 'No'],
         answer: 1
       },

       {
         q: 'Barking cough, making a squeaky or whistling noise when breathing ?',
         options: ['Yes', 'No'],
         answer: 1
       }
     ],
     index: 0,
     load: function() {
       if (this.index <= this.questions.length - 1) {
         questionBox.innerHTML = this.index + 1 + ". " + this.questions[this.index].q;
         op1.innerHTML = this.questions[this.index].options[0];
         op2.innerHTML = this.questions[this.index].options[1];

         this.resultbox();
       } else if (this.score >= 6) {

         questionBox.innerHTML = "!! High Risk of COVID-19 Positive, Please remain in self isolation and contact the repective nearest Hospital ASAP.";
         op1.style.display = "none";
         op2.style.display = "none";

         btn.style.display = "none";
       } else {
         questionBox.innerHTML = "!! Please remain in self isolation and dont worry, And if possible contact the nearest hospital for Confirmation.";
         op1.style.display = "none";
         op2.style.display = "none";

         btn.style.display = "none";

       }




     },
     next: function() {
       this.index++;
       this.load();
     },
     check: function(ele) {

       var id = ele.id.split('');


       if (id[id.length - 1] == this.questions[this.index].answer) {
         this.score++;
         this.resultbox();
       }

     },
     notClickAble: function() {
       for (let i = 0; i < ul.children.length; i++) {
         ul.children[i].style.pointerEvents = "none";
       }
     },

     clickAble: function() {
       for (let i = 0; i < ul.children.length; i++) {
         ul.children[i].style.pointerEvents = "auto";
         ul.children[i].className = ''

       }
     },
     score: 0,
     resultbox: function() {
       resultbox.innerHTML = this.questions.length + "/" + this.score;
     }

   }


   window.onload = app.load();

   function button(ele) {
     app.check(ele);
     app.notClickAble();
   }

   function next() {
     app.next();
     app.clickAble();
   }
