<script>
       $(document).ready(function(){

//=========================Blog Item  Update===================================================================================>
      $("#footer_form").submit(function(e){
              e.preventDefault();
              var formdata = new FormData(this);
              $('#footer_error').text('');
              $.ajax({
                method:'POST',
                url:"{{ route('footer.post') }}",
                data:formdata,
                contentType:false,
                processData:false,
                success:(response)=>{
                  if(response){
                    this.reset();
                    // $('#updateModal').modal('hide');
                    $(' #footer_form').load(location.href+' #footer_form');
                    alert('Upload Successfull');
                  }
                },
                error:function(response){
                   $('#footer_error').text(response.responseJSON.message);
                }

              });
         })

         
       });
</script>