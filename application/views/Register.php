<?php include 'partials/header.php'?>


<div class="container">

    <h2>Register</h2>

    <?php if ($this->session->flashdata('msg')){

        echo "<h3>".$this->session->flashdata('msg')."</h3>";

    }

    ?>

    <hr>
	
    <font color="#ff0000"><?php echo validation_errors(); ?></font>
    <?php echo form_open('Register/RegisterUser'); ?>

		<div class="form-group">
            <label>Country</label>
		<!--country start-->
<?php		
//                    name        id      classes            Selected        Popular    all option
echo country_dropdown('country', 'cont', 'dropdown col_12_16', 'LK', array('US','IN','BD'), '');
// Returns a list of ALL countries, with an id of cont adds the classes of dropdown and col_12_16 the selected country shown at the top of the list and the three most common countries shown below and the all countries option is not shown because of no parameter ''
//The helper code:
//selected country would be retrieved from a database or as post data
function  country_dropdown($name, $id, $class, $selected_country,$top_countries=array(), $all, $selection=NULL, $show_all=TRUE ){
	// Getting the array of countries from the config file
	$countries = config_item('country_list');
	$html = "<select name='{$name}' id='{$id}' class='{$class}'>";
	$selected = NULL;
	if(in_array($selection,$top_countries)){
		$top_selection = $selection;
		$all_selection = NULL;
	}else{
		$top_selection = NULL;
		$all_selection = $selection;
	}
	if(!empty($selected_country)&&$selected_country!='all'&&$selected_country!='select'){
		$html .= "<optgroup label='Selected Country'>";
		if($selected_country === $top_selection){
			$selected = "SELECTED";
		}
		$html .= "<option value='{$selected_country}'{$selected}>{$countries[$selected_country]}</option>";
		$selected = NULL;
		$html .= "</optgroup>";
	}else if($selected_country=='all'){
		$html .= "<optgroup label='Selected Country'>";
		if($selected_country === $top_selection){
			$selected = "SELECTED";
		}
		$html .= "<option value='all'>All</option>";
		$selected = NULL;
		$html .= "</optgroup>";
	}else if($selected_country=='select'){
		$html .= "<optgroup label='Selected Country'>";
		if($selected_country === $top_selection){
			$selected = "SELECTED";
		}
		$html .= "<option value='select'>Select</option>";
		$selected = NULL;
		$html .= "</optgroup>";
	}
	if(!empty($all)&&$all=='all'&&$selected_country!='all'){
		$html .= "<option value='all'>All</option>";
		$selected = NULL;
	}
	if(!empty($all)&&$all=='select'&&$selected_country!='select'){
		$html .= "<option value='select'>Select</option>";
		$selected = NULL;
	}
	
	if(!empty($top_countries)){
		$html .= "<optgroup label='Top Countries'>";
		foreach($top_countries as $value){
			if(array_key_exists($value, $countries)){
				if($value === $top_selection){
					$selected = "SELECTED";
				}
			$html .= "<option value='{$value}'{$selected}>{$countries[$value]}</option>";
			$selected = NULL;
			}
		}
		$html .= "</optgroup>";
	}
	if($show_all){
		$html .= "<optgroup label='All Countries'>";
		foreach($countries as $key => $country){
			if($key === $all_selection){
				$selected = "SELECTED";
			}
			$html .= "<option value='{$key}'{$selected}>{$country}</option>";
			$selected = NULL;
		}
		$html .= "</optgroup>";
	}
	
	$html .= "</select>";
	return $html;
    }
?>
		
		<!--country end-->
		</div>

		
		<div class="form-group">
			
			  <input type="radio" name="title" value="Mr"> Mr. 
			  <input type="radio" name="title" value="Ms"> Ms. 
			  <input type="radio" name="title" value="Mrs"> Mrs.
			
		</div>
		
        <div class="form-group">
            <label for="exampleInputPassword1">First Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="First name" name="fname">
        </div>

		<div class="form-group">
            <label for="exampleInputPassword1">Surname</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Surname" name="lname">
        </div>
		
		<div class="form-group">
			
			  <input type="radio" name="gender" value="male"> Male
			  <input type="radio" name="gender" value="female"> Female
			
		</div>
		
		<div class="form-group">
		  <label>Birthday</label>
		  <input type="date" name="bday">
		</div>
		
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Address" name="address">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">City</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="City" name="city">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name="passwordagain">
        </div>

        <div class="form-group">
            <label>Upload Your Profile Image</label>
            <input type="file" name="pic" accept="image/*">
        </div>

		
		
        <button type="submit" class="btn btn-default">Submit</button>
   <?php echo form_close(); ?>
   

</div>


<?php include 'partials/footer.php'?>
