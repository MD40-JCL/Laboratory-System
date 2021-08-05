// $(document).ready(function(){
//     $("#supply").click(function(){
//       // $("#admin-content").html("<h3>charcoal</h3>");
//       $("#admin-summery").hide();
//       $("#administration").show();
//       // $("#admin-content").load("resources/views/admin/text.text");
//       // alert("ID : " + $("#admin-content").val());
//     });
// });

// $(document).ready(function(){
//     var trigger = $("#app-navbar-collapse ul li ul li a"),
//         container =$("#admin-content");

//     trigger.on('click',function(){
//         var $this = $this,
//             $target = $this.data('target');

//         container.load(target+'.php');

//         return false;
//     });
// });

// $('#no_of_bags').on('keypress',function(){
//     alert('test');
// });

// $(document).ready(function(){
//     $('#no_of_bags').on('change',function(){
//         addTable();
//     });
//     function addTable(){
//         var $noBags = $('input[id=no_of_bags]').val();
//         for($row=1;$row<=$noBags;$row++){
//             console.log($row);
//             var tr ='<tr>'+
//                         '<td><input type="text" name="bag_no" value='+$row+'></td>'+
//                         '<td><input type="text" name="seal_no"></td>'+
//                         '<td><input type="text" name="barcode"></td>'+
//                         '<td><input type="text" name="weight"></td>'+
//                         '<td><input type="text" name="mc"></td>'+
//                         '<!-- <td><input type="text" name="dry_weight"></td> -->'+
//                         '<td><input type="text" name="ops_epf"></td>'+
//                         '<td><input type="checkbox" name="dedust" value="1" class="form-control"></td>'+
//                     '</tr>';
//                 $('tbody').show(tr);
//             $('#bagsdata').append(tr);
//         }

//     }
// });