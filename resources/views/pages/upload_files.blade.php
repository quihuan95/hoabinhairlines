<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Upload Files</title>
	<link href="{{asset('public/frontend/css/font-awesome-5.min.css?0808dd08ad62f5774e5f045e2ce6d08b')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('public/frontend/css/font-awesome-v4-shims.css?0808dd08ad62f5774e5f045e2ce6d08b')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('public/frontend/css/bootstrap.min.css?v=11.5.7.p')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('public/frontend/css/transpro.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<style type="text/css">
		
	</style>
</head>
<body> 
<?php
            $message=Session::get('message');
            if($message){
                echo '<p style="color:red;">'.$message.'</p>';
                $message=Session::put('message',null);
            }
            ?>
	<form role="form" method="post" action="{!! route('admin.news.multiuploads') !!}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <table style="width: 100%;">
                    	<tr>
                    		<td style="width: 90%;"><input type="file" required class="form-control" id="pictures" name="photos[]" multiple /></td>
                    		<td style="text-align:right;"><input type="submit" class="btn btn-primary" value="Upload" /></td>
                    	</tr>
                    </table>
                    
                    
</form>
</body>
</html>