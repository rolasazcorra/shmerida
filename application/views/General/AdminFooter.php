            </div>
            
            <footer>
               
            </footer>
        </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>assets/js/admin4b.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/admin4b.docs.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-steps.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/10.0.1/classic/ckeditor.js"></script>
    <script>
        $('#demo').steps({
            onFinish: function () { alert('Wizard Completed'); }
        });
    </script>
    <script>
        ClassicEditor
        .create( document.querySelector( '#editor' ) )
            .then( editor => {
                // console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
        .create( document.querySelector( '#editor1' ) )
            .then( editor => {
                // console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
            ClassicEditor
        .create( document.querySelector( '#editor2' ) )
            .then( editor => {
                // console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
            ClassicEditor
        .create( document.querySelector( '#editor3' ) )
            .then( editor => {
                // console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <style>
        .ck-editor__editable {
            min-height: 250px;
        }
    </style>
    </body>
</html>