var img_url="http://localhost/downtownadminpanel/uploads/";
// var base_url    =$('#base').val();
var base_url = $('#base').val();

function viewHairCutting(e) {



            $.ajax({
                type: "POST",
                url: base_url + "HomeControl/viewcategory",
                data: {
                    category_id:e
                },
        
                success: function (data) {

                    //alert(data);
                    console.log(data);
                    result = JSON.parse(data);
                    countData = result.length;


                    x = '';
                    y = '';

                        for (i = 0; i < countData; i++) {

                            f_name= result[i]['f_name'];
                            f_des = result[i]['f_des'];
                            f_img = result[i]['f_img'];

                            //alert(f_img);
                            x='<div class="folio-item headshaves col-sm-12 col-sm-6 col-md-6 col-lg-6"><div class="folio-thumb"><a href="#" class="pop_lbox"><div class="overlay-bg"></div><img src="http://localhost/downtownadminpanel/uploads/'+f_img+'"class="img-responsive" alt="" /></a><div class="folio-border"><div class="folio-detail<h5>"'+f_name+'"</h5><h6>"'+f_des+'"</h6></div></div></div></div>';
                             y = y + x;
                        }


                        document.getElementById("testImg").innerHTML = y;

                }
        
            });


            
       
}

