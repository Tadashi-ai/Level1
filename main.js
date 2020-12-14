
$(".btnedit").click(e=>{
let textvalues=displayData(e);

let id=$("input[name*='id']");
let student_name=$("input[name*='student_name']");
let student_course=$("input[name*='student_course']");
let student_phone=$("input[name*='student_phone']");
let student_gender=$("input[name*='student_gender']");

id.val(textvalues[0]);
student_name.val(textvalues[1]);
student_course.val(textvalues[2]);
student_phone.val(textvalues[3]);
student_gender.val(textvalues[4]);

});


function displayData(e) {
    let id = 0;
    const td = $("#tbody tr td");
    let textvalues = [];

    for(const value of td) {
     if (value.dataset.id==2){
         console.log(value);
     }
    }
}