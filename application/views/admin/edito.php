<header>
	<p>Administration</p>
	<nav>
		<ul>
			<li>Create Admin<span class="glyphicon glyphicon-plus" aria-hidden="true"></span></li>
			<li><?php echo $username ?><span class="glyphicon glyphicon-off" aria-hidden="true"></span></li>
		</ul>
	</nav>
	<div class="clear"></div>
</header>
<aside>
	<nav>
		<ul id="ulslide">
			<li><p><a href="<?php echo base_url(); ?>editorials">Editoriaux</a></p></li>
			<li><p><a href="">Beauté</a></p></li>
			<li><p><a href="">Campagne</a></p></li>
			
		</ul>
		<span id="okidoki"><span class="glyphicon glyphicon-list"></span></span>
	</nav>
</aside>
<form method="post" action="" id="upload_files" class="form-horizontal" enctype="multipart/form-data">

        
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Name Edito</label>
          <div class="col-sm-10">
            <input type="text" size="20" id="name_edito" name="name_edito" class="form-control"/>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Name Serie</label>
          <div class="col-sm-10">
            <input type="text" size="20" id="name_serie" name="name_serie" class="form-control"/>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Publication</label>
          <div class="col-sm-10">
            <input type="text" size="20" id="publication" name="publication" class="form-control"/>
          </div>
        </div>
        <div class="form-group">  
          <label for="inputEmail3" class="col-sm-2 control-label">Photographer</label>
          <div class="col-sm-10">         
            <input type="text" size="20" id="photographer" name="photographer" class="form-control"/>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Hair</label>
          <div class="col-sm-10">
            <input type="text" size="20" id="hair" name="hair" class="form-control"/>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Make up</label>
          <div class="col-sm-10">
            <input type="text" size="20" id="makeup" name="makeup" class="form-control"/>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Stylist</label>
          <div class="col-sm-10">
            <input type="text" size="20" id="stylist" name="stylist" class="form-control"/>
          </div>
        </div>
        <div class="form-group">
        	<label for="userfile" class="col-sm-2 control-label">File</label>
        	<div class="col-sm-10">
        	<input type="file" name="userfile" id="userfile" form-control size="20" />
        </diV>
    	</div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Sexe</label>
          <div class="col-sm-10">
           	<select id="sexe" name="sexe">
           		<option value="m">Men</option>
           		<option value="w">Women</option>
            </select>    
          </div>
        </div>
     
      <button type="submit" class=" btn btn-default">Add Editorial</button>
      </form>