// var $formData = [];
// if(localStorage.getItem("form")){
//     $formData = localStorage.getItem("form");
//     $formData = JSON.parse($formData);
// }


// $(document).ready(function(){
//     $("select").on("change", function(e){
//         assign_values($(this));
//     });
//     $("input").on("blur, change", function(e){
//         assign_values($(this));
//     });

//     function assign_values(ele){
//         localStorage.removeItem("form");
//         var field = {
//             type: ele[0].localName,
//             sub_type: ele.attr("type"),
//             name: ele.attr('name'),
//             value: ele.val()
//         };
//         if(field.sub_type=="checkbox"){
//             field.value = 0;
//             if(ele.is(":checked")){
//                 field.value = 1;
//             }
//         }
//         find_if_exists($formData, field);
        
//         localStorage.setItem("form", JSON.stringify($formData));

//         // $formData.push(ele);
//         // $.each($formData, function(){
//         //     console.log(ele.val())
//         // });
        
//     }

//     function find_if_exists($formData, field){
//         if($formData.length>0){
//             $.each($formData, function(k, v){
//                 if(field.name==v.name){
//                     $formData[k] = field;
//                 }else{
//                     $formData.push(field);
//                 }
//             });
//         }else{
//             $formData.push(field);
//         }

//     }
// });


// $(document).ready(function(){
//     if(localStorage.getItem("form")){
//         fill_seta_pdf_form_data();
//     }
// });

// if(localStorage.getItem("form")){
//     var formData = localStorage.getItem("form");
//     formData = JSON.parse(formData);
//     console.log(formData);
// }

// function save_form_data(event, currentIndex, newIndex){
//     if(localStorage.getItem("form")){
//         localStorage.removeItem("form");
//     }
//     var form = $('#seta_pdf_form_wizard');
//     var formArray = [];
//     $.each(form[0], function(k, v){
//         var     type = v.localName,
//                 sub_type = $(v).attr("type"),
//                 name = $(v).attr('name'),
//                 value = $(v).val();
//         if(sub_type=="checkbox"){
//             value = 0;
//             console.log($(v).is(":checked"));
//             if($(v).is(":checked")){
//                 value = 1;
//             }
//         }
//         var field = {type:type,sub_type:sub_type,name:name,value:value};
//         formArray.push(field);
//     });
//     localStorage.setItem("form", JSON.stringify(formArray));
// }

// function fill_seta_pdf_form_data(){
//     var formData = localStorage.getItem("form");
//     formData = JSON.parse(formData);
//     $.each(formData, function(k, v){
//         var name = v.name;
//         var type = v.type;
//         var value = v.value;
//         var sub_type = v.sub_type;

//         if(value!=""){
//             if(type=="input" && sub_type=="text")
//                 fill_input(name, type, value);

//             if(type=="input" && sub_type=="checkbox")
//                 fill_input_checkbox(name, type, value);

//             if(type=="select")
//                 fill_select(name, type, value);
//         }
//     });
// }

// function fill_input(name, type, value){
//     $("input[name="+name+"]").val(value);
//     $("input[name="+name+"]:checked").val(value);
// }
// function fill_select(name, type, value){
//     $("select[name="+name+"]").val(value).trigger('change');
// }
// function fill_input_checkbox(name, type, value){
//     if(value==1){
//         $("input[name="+name+"]").prop("checked", true);
//     }
// }