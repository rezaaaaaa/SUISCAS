<html>
<head>
<title>Student Registration Form</title>
<style type="text/css">
    body{
        background-color: #B0B0B0;
    }
    h3{font-family: Calibri; 
    font-size: 22pt; font-style: normal; 
    font-weight: bold; color:  000099;
    text-align: center; 
    text-decoration: underline 
    }
    table{font-family: Calibri; 
    color:white; 
    font-size: 13pt; 
    font-style: normal;
    background-color: 006699; 
    border-collapse: collapse; 
    border: 5px solid navy}
    table.inner{border: 0px}
    td{padding: 15px;}

</style>
</head>
 
<body>
<h3>STUDENT REGISTRATION FORM</h3>


	
		<form action="" method="post">
		<table  border="1" align="center" cellpadding = "10">
		<!--- First Name ---------------------------------------------------------->
		<tr><h4><td colspan="2" align="center">I. APPLICATION INFORMATION</td></h4></tr>

		<tr>
		<td>Student ID</td>
		<td><input type="text" name="SID" maxlength="30"/>
		</td>
		</tr>


		<tr>
		<td>Present Immigration Status</td>
		<td><input type="text" name="PIS" maxlength="30"/>
		(max 30 characters a-z and A-Z)
		</td>
		</tr>

		<tr>
		<td>Nature of Application</td>
		<td>
		Conversion
		<input type="checkbox" name="Con" value="Conversion"/>
		Inclusion
		<input type="checkbox" name="Con" value="Inclusion"/>
		Extension
		<input type="checkbox" name="Con" value="Extension"/>
		Permit
		<input type="checkbox" name="Con" value="Permit"/>
		</td>
		</tr>



		<tr>
		<td>Type of Application</td>
		<td>Student Visa
        <input type="checkbox" name="appType" value="Conversion"/>
        Special Study Permit
        <input type="checkbox" name="appType" value="Inclusion"/>
		</td>
		</tr>


        <tr>
        <td>Course/Degree</td>
        <td><input type="text" name="Course" maxlength="30"/>
        (max 30 characters a-z and A-Z)
        </td>
        </tr>



		<tr>
		<td>Number of Months/Years Applied For</td>
		<td>
		3 Months
		<input type="checkbox" name="year" value="3 Months" />
		1 Year
		<input type="checkbox" name="year" value="1 Year" />
		2 Years
		<input type="checkbox" name="year" value="2 Years" />
		3 Years
		<input type="checkbox" name="year" value="3 Years" />
		</td>
		</tr>

        <tr>
        <td>School year</td>
        <td>
		 <select name="School_Year" id="Birthday_Year">
        <option value="-1">Year:</option>
        <option value="2009">2015</option>
        <option value="2008">2016</option>
        <option value="2009">2017</option>
        <option value="2008">2018</option>
        <option value="2009">2019</option>
        <option value="2008">2020</option>
        <option value="2009">2021</option>
        <option value="2008">2022</option>
        </select>
            -
        <select name="School_Year" id="Birthday_Year">
        <option value="-1">Year:</option>
        <option value="2009">2015</option>
        <option value="2008">2016</option>
        <option value="2009">2017</option>
        <option value="2008">2018</option>
        <option value="2009">2019</option>
        <option value="2008">2020</option>
        <option value="2009">2021</option>
        <option value="2008">2022</option>
        </select>
        </td>
        </tr>

		 <tr>
		<td>Name of School Representative<br> [Last Name, First/Given Name, Middle Name]</td>
		<td><textarea name="schoolRep" rows="1" cols="60"></textarea><br>
		(max 60 characters a-z and A-Z)
		</td>
		</tr>

		 <tr>
		<td>School Representative Identification Number</td>
		<td><textarea name="schoolAuth" rows="1" cols="60"></textarea><br>
		(max 60 characters a-z and A-Z)
		</td>
		</tr>

	
        <tr><td colspan="2" align="center">S-II APPLICATION TRAVEL INFORMATION</td></tr>

        <tr>
        <td>Passport Number</td>
        <td><textarea name="PassN" rows="1" cols="15"></textarea><br>
        (max 15 characters a-z and A-Z)
        </td>
        </tr>


        <tr>
        <td>Date of last arrival</td>
        <td><select name="LstDA" id="Birthday_Day">
        <option value="-1">Day:</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
         
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
         
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
         
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
        </select>
        <select id="Birthday_Month" name="Birthday_Month">
        <option value="-1">Month:</option>
        <option value="January">Jan</option>
        <option value="February">Feb</option>
        <option value="March">Mar</option>
        <option value="April">Apr</option>
        <option value="May">May</option>
        <option value="June">Jun</option>
        <option value="July">Jul</option>
        <option value="August">Aug</option>
        <option value="September">Sep</option>
        <option value="October">Oct</option>
        <option value="November">Nov</option>
        <option value="December">Dec</option>
        </select>
        <select name="Birthday_Year" id="Birthday_Year">
        <option value="-1">Year:</option>
        <option value="2009">2015</option>
        <option value="2008">2016</option>
        <option value="2009">2017</option>
        <option value="2008">2018</option>
        <option value="2009">2019</option>
        <option value="2008">2020</option>
        <option value="2009">2021</option>
        <option value="2008">2022</option>
        </select>

              

  
        <tr>
        <td>Passport Expiry Date/Valid Until</td>
        <td>
        <select name="PassEX" id="Birthday_Day">
        <option value="-1">Day:</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
         
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
         
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
         
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
        </select>

        <select id="Birthday_Month" name="Birthday_Month">
        <option value="-1">Month:</option>
        <option value="January">Jan</option>
        <option value="February">Feb</option>
        <option value="March">Mar</option>
        <option value="April">Apr</option>
        <option value="May">May</option>
        <option value="June">Jun</option>
        <option value="July">Jul</option>
        <option value="August">Aug</option>
        <option value="September">Sep</option>
        <option value="October">Oct</option>
        <option value="November">Nov</option>
        <option value="December">Dec</option>
        </select>


        <tr>
        <td>Flight Number</td>
        <td><textarea name="FlNum" rows="1" cols="15"></textarea><br>
        </td>
        </tr>


        <tr>
        <td>Place of Issuance</td>
        <td><textarea name="PoI" rows="1" cols="15"></textarea><br>
        (max 15 characters a-z and A-Z)
        </td>
        </tr>

        <tr>
        <td>Last Day of Authorized Stay</td>
        <td><select name="DLA" id="Birthday_Day">
        <option value="-1">Day:</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
         
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
         
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
         
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
         
        <option value="31">31</option>
        </select>
         
        <select id="Birthday_Month" name="Birthday_Month">
        <option value="-1">Month:</option>
        <option value="January">Jan</option>
        <option value="February">Feb</option>
        <option value="March">Mar</option>
        <option value="April">Apr</option>
        <option value="May">May</option>
        <option value="June">Jun</option>
        <option value="July">Jul</option>
        <option value="August">Aug</option>
        <option value="September">Sep</option>
        <option value="October">Oct</option>
        <option value="November">Nov</option>
        <option value="December">Dec</option>
        </select>
        <select name="Birthday_Year" id="Birthday_Year">
        <option value="-1">Year:</option>
        <option value="2009">2015</option>
        <option value="2008">2016</option>
        <option value="2009">2017</option>
        <option value="2008">2018</option>
        <option value="2009">2019</option>
        <option value="2008">2020</option>
        <option value="2009">2021</option>
        <option value="2008">2022</option>
        </select>

    </td>
    </tr>

 


<tr><td colspan="2" align="center">S-III APPLICANTION PERSONAL INFORMATION</td></tr>

<tr>
<td>Last Name</td>
<td><textarea name="LastName" rows="1" cols="30"></textarea><br>
</tr>

<tr>
<td>First/Given Name/td>
<td><textarea name="FirstName" rows="1" cols="30"></textarea><br>
</tr>

<tr>
<td>Middle Name/td>
<td><textarea name="MiddleName" rows="1" cols="30"></textarea><br>
</tr>

       <tr>
        <td>Date of Birth [DD-MMM-YYYY e.g. 01 JAN 1990]</td>
        <td><select name="DLA" id="Birthday_Day">
        <option value="-1">Day:</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
         
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
         
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
         
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
         
        <option value="31">31</option>
        </select>
         
        <select id="Birthday_Month" name="Birthday_Month">
        <option value="-1">Month:</option>
        <option value="January">Jan</option>
        <option value="February">Feb</option>
        <option value="March">Mar</option>
        <option value="April">Apr</option>
        <option value="May">May</option>
        <option value="June">Jun</option>
        <option value="July">Jul</option>
        <option value="August">Aug</option>
        <option value="September">Sep</option>
        <option value="October">Oct</option>
        <option value="November">Nov</option>
        <option value="December">Dec</option>
        </select>
        <select name="Birthday_Year" id="Birthday_Year">
        <option value="-1">Year:</option>
        <option value="2009">2015</option>
        <option value="2008">2016</option>
        <option value="2009">2017</option>
        <option value="2008">2018</option>
        <option value="2009">2019</option>
        <option value="2008">2020</option>
        <option value="2009">2021</option>
        <option value="2008">2022</option>
        </select>

    </td>
    </tr>


        <tr>
        <td>GENDER</td>
        <td>
        Male <input type="radio" name="Gender" value="Male" />
        Female <input type="radio" name="Gender" value="Female" />
        </td>
        </tr>
 
        <tr>
        <td>Country of Birth</td>
        <td><input type="text" name="Country" maxlength="30" />
        (max 30 characters a-z and A-Z)
        </td>
        </tr>

         <tr>
        <td>Citizenship/Nationality</td>
        <td><input type="text" name="Citizenship" maxlength="30" />
        (max 30 characters a-z and A-Z)
        </td>
        </tr>

        <tr>
        <td>Civil Status</td>
        <td>
        Single
        <input type="checkbox" name="CivilStatus" value="Single"/>
        Married
        <input type="checkbox" name="CivilStatus" value="Married"/>
        Annulled
        <input type="checkbox" name="CivilStatus" value="Annulled"/>
        Separated
        <input type="checkbox" name="CivilStatus" value="Separated"/>
        Widowed
        <input type="checkbox" name="CivilStatus" value="Widowed"/>
        Divorced
        <input type="checkbox" name="CivilStatus" value="Divorced"/>
        </td>
        </tr>
 

        <tr>
        <td>Height [cm]</td>
        <td><input type="text" name="Height" maxlength="6" />
        (3 digit number)
        </td>
        </tr>

        <tr>
        <td>Weight [kg]</td>
        <td><input type="text" name="Weight"  />
        (3 digit number)
        </td>
        </tr>
 

        <tr>
        <td>Contact Number(s) in the Philippines</td>
        <td>Mobile <input type="text" name="Mobile" maxlength="30" /> 
            Landline <input type="text" name="Landline" maxlength="30" /> </td>
      
        </tr>

        <tr>
        <td>Special Security Registration Number (SSRN)</td>
        <td><input type="text" name="SSRN" maxlength="6" />
        </td>
        </tr>

        <tr>
        <td>Email Address</td>
        <td><input type="text" name="Email" maxlength="6" />
        </td>
        </tr>




         <tr>
        <td>Residential Address in the Philippines House/Unit No., Street, Subdivision/Village</td>                        
        <td><textarea name="philAddress" rows="1" cols="60"></textarea><br>
        (max 60 characters a-z and A-Z)
        </td>
        </tr>

         <tr>
        <td>Barangay, Municipality/City</td>                        
        <td><textarea name="Barangay" rows="1" cols="60"></textarea><br>
        (max 60 characters a-z and A-Z)
        </td>
        </tr>

          <tr>
        <td>Province, Zip Code</td>                        
        <td><textarea name="ZipCode" rows="1" cols="60"></textarea><br>
        </td>
        </tr>

          <tr>
        <td>Residential Address Abroad House/Unit No., Street, Subdivision/Village</td>                        
        <td><textarea name="philAddress" rows="1" cols="60"></textarea><br>
        (max 60 characters a-z and A-Z)
        </td>
        </tr>

         <tr>
        <td>City, State</td>                        
        <td><textarea name="City" rows="1" cols="60"></textarea><br>
        (max 60 characters a-z and A-Z)
        </td>
        </tr>

          <tr>
        <td>Country, Zip Code</td>                        
        <td><textarea name="CZipCode" rows="1" cols="60"></textarea><br>
        </td>
        </tr>


         <tr>
        <td>Facebook Address</td>                        
        <td><textarea name="FBaddress" rows="1" cols="60"></textarea><br>
        </td>
        </tr>

       


        <tr><td colspan="2" align="center">IV. GUARDIAN INFORMATION</td></tr>

        <tr>
        <td>Name of Guardian [Last Name, First/Given Name, Middle Name]</td>                        
        <td><textarea name="Guardian" rows="1" cols="60"></textarea><br>
        </td>
        </tr>



        <tr>
        <td>Residential Address in the Philippines House/Unit No., Street, Subdivision/Village</td>                        
        <td><textarea name="GAddress" rows="1" cols="60"></textarea><br>
        </td>
        </tr>


        <tr>
        <td>Residential Address in the Philippines House/Unit No., Street, Subdivision/Village</td>                        
        <td><textarea name="GAddress" rows="1" cols="60"></textarea><br>
        </td>
        </tr>

           <tr>
        <td>Barangay, Municipality/City</td>                        
        <td><textarea name="Barangay" rows="1" cols="60"></textarea><br>
        (max 60 characters a-z and A-Z)
        </td>
        </tr>

          <tr>
        <td>Province, Zip Code</td>                        
        <td><textarea name="ZipCode" rows="1" cols="60"></textarea><br>
        </td>
        </tr>

         <tr>
        <td>Country, Zip Code</td>                        
        <td><textarea name="CZipCode" rows="1" cols="60"></textarea><br>
        </td>
        </tr>


         <tr><td colspan="2" align="center">V. SCHOOL INFORMATION</td></tr>

        <tr>
        <td>Name of School</td>                        
        <td><textarea name="SchoolName" rows="1" cols="60"></textarea><br>
        </td>
        </tr>



        <tr>
        <td>School Accreditation Number</td>                        
        <td><textarea name="SchoolAccNum" rows="1" cols="60"></textarea><br>
        </td>
        </tr>

        <tr>
        <td>Residential Address in the Philippines House/Unit No., Street, Subdivision/Village</td>                        
        <td><textarea name="GAddress" rows="1" cols="60"></textarea><br>
        </td>
        </tr>

             <tr>
        <td>Barangay, Municipality/City</td>                        
        <td><textarea name="Barangay" rows="1" cols="60"></textarea><br>
        (max 60 characters a-z and A-Z)
        </td>
        </tr>

          <tr>
        <td>Province, Zip Code</td>                        
        <td><textarea name="ZipCode" rows="1" cols="60"></textarea><br>
        </td>
        </tr>

         <tr>
        <td>Country, Zip Code</td>                        
        <td><textarea name="CZipCode" rows="1" cols="60"></textarea><br>
        </td>
        </tr>

        <tr>
        <td>Contact Number(s) in the Philippines</td>
        <td>Mobile <input type="text" name="Mobile" maxlength="30" /> 
            Landline <input type="text" name="Landline" maxlength="30" /> </td>
      
        </tr>

         <tr>
        <td>Registered Address of School Room No., Floor No., Building, Street</td>                        
        <td><textarea name="GAddress" rows="1" cols="60"></textarea><br>
        </td>
        </tr>

             <tr>
        <td>Barangay, Municipality/City</td>                        
        <td><textarea name="Barangay" rows="1" cols="60"></textarea><br>
        (max 60 characters a-z and A-Z)
        </td>
        </tr>

          <tr>
        <td>Province, Zip Code</td>                        
        <td><textarea name="ZipCode" rows="1" cols="60"></textarea><br>
        </td>
        </tr>

         <tr>
        <td>Country, Zip Code</td>                        
        <td><textarea name="CZipCode" rows="1" cols="60"></textarea><br>
        </td>
        </tr>

        <tr>
        <td>Contact Number(s) in the Philippines</td>
        <td>Mobile <input type="text" name="Mobile" maxlength="30" /> 
            Landline <input type="text" name="Landline" maxlength="30" /> </td>
      
        </tr>


        <tr><td colspan="2" align="center">VI. ACR I-CARD</td></tr>


          <tr>
        <td>Alien Certificate of Registration (ACR) Number</td>                        
        <td><textarea name="ACR" rows="1" cols="30"></textarea><br>
        </td>
        </tr>

        <tr>
        <td>Date of Issuance [DD-MMM-YYYY e.g. 01 JAN 1990]</td>
        <td><select name="DLA" id="Birthday_Day">
        <option value="-1">Day:</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
         
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
         
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
         
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
         
        <option value="31">31</option>
        </select>
         
        <select id="Birthday_Month" name="Birthday_Month">
        <option value="-1">Month:</option>
        <option value="January">Jan</option>
        <option value="February">Feb</option>
        <option value="March">Mar</option>
        <option value="April">Apr</option>
        <option value="May">May</option>
        <option value="June">Jun</option>
        <option value="July">Jul</option>
        <option value="August">Aug</option>
        <option value="September">Sep</option>
        <option value="October">Oct</option>
        <option value="November">Nov</option>
        <option value="December">Dec</option>
        </select>
        <select name="Birthday_Year" id="Birthday_Year">
        <option value="-1">Year:</option>
        <option value="2009">2015</option>
        <option value="2008">2016</option>
        <option value="2009">2017</option>
        <option value="2008">2018</option>
        <option value="2009">2019</option>
        <option value="2008">2020</option>
        <option value="2009">2021</option>
        <option value="2008">2022</option>
        </select>

    </td>
    </tr>

        <tr>
        <td>Expiry Date/Valid Until [DD-MMM-YYYY e.g. 01 JAN 1990]</td>
        <td><select name="DLA" id="Birthday_Day">
        <option value="-1">Day:</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
         
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
         
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
         
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
         
        <option value="31">31</option>
        </select>
         
        <select id="Birthday_Month" name="Birthday_Month">
        <option value="-1">Month:</option>
        <option value="January">Jan</option>
        <option value="February">Feb</option>
        <option value="March">Mar</option>
        <option value="April">Apr</option>
        <option value="May">May</option>
        <option value="June">Jun</option>
        <option value="July">Jul</option>
        <option value="August">Aug</option>
        <option value="September">Sep</option>
        <option value="October">Oct</option>
        <option value="November">Nov</option>
        <option value="December">Dec</option>
        </select>
        <select name="Birthday_Year" id="Birthday_Year">
        <option value="-1">Year:</option>
        <option value="2009">2015</option>
        <option value="2008">2016</option>
        <option value="2009">2017</option>
        <option value="2008">2018</option>
        <option value="2009">2019</option>
        <option value="2008">2020</option>
        <option value="2009">2021</option>
        <option value="2008">2022</option>
        </select>
        </td>
        </tr>


         <tr>
        <td>Certificate of Residence Number (CRN)</td>                        
        <td><textarea name="CRN" rows="1" cols="30"></textarea><br>
        </td>
        </tr>

        <tr>
        <td colspan="2" align="center">
        <input type="submit" name="Submit">     </td>
        </tr>

        </table>
        </form>
        </body>
        </html>





<?php
 /*
        else {
                

              // Initialize errors to be nonexistent.
                        $SID_error = "";
                        $PIS_error = "";
                        $Con_error = "";
                        $VisaType_error = "";
                        $year_error = "";
                        //$appMethod_error = "";
                       // $BIN_error = "";
                       // $authRep_error = "";
                       // $position_error = "";

                        // Test variables.
                        $test_SID_ = trim($_POST['SID']);
                        $test_PIS= test_input($_POST['PIS']);
                        $test_Con = test_input($_POST['Con']);
                        $VisaType_name = test_input($_POST['VisaType']);
                        $test_year = test_input($_POST['year']);
                        //Check for errors.

                     
                        if(empty($_POST['SID'])){
                            // SID is empty.
                            $SID_error = 1;
                        } else if(!preg_match('/^[0-9a-z_]+$/', $test_SID) || strlen($_POST['SID']) < 6){
                            // SID isn't legal.
                            $SID_error = 3;
                        }
                        if(empty($_POST['PIS'])) {
                            // PIS is empty.
                            $PIS_error = 1;
                        } else if(!preg_match('/^[0-9A-Za-z]+$/', $test_PIS) || strlen($_POST['PIS']) < 6){
                            //PIS isn't legal. Can only contain letters or numbers and is case sensitive.
                            $PIS_error = 2;
                        }
                        if(empty($_POST['Con'])){
                            // First Name is empty.
                            $Con_error = 1;
                        } else if(!preg_match('/^[a-z ]+$/i', $test_Con)){
                            $Con_error = 2;
                        }
                        if(empty($_POST['VisaType'])){
                            // Last Name is empty.
                            $VisaType_error = 1;
                        } else if(!preg_match('/^[a-z ]+$/i', $test_VisaType)){
                            // Last name must contain only letters and white spaces.
                            $VisaType_error = 2;
                        } 
                        if(empty($_POST['year'])){
                            // year  is empty.
                            $year_error = 1;
                        } else if(!filter_var($test_year , FILTER_VALIDATE_year )){
                            // Invalid year  format.
                            $year_error = 3;
                        }
                        ## connect mysql server
                            

                        $host = "localhost";
                         $user = "root";
                        $pass = "";
                        $con = mysql_connect($host, $user, $pass);
                        $db = "suiscas";    

                        if(!$con)
                        {
                            die("Could not connect: " . mysql_error());
                        }
                         mysql_select_db($db,$con);

                        

                         $host = "localhost";
                         $user = "root";
                        $pass = "";
                       // $con = mysql_connect($host, $user, $pass);
                        $db = "suiscas"; 
                       $mysql = new mysql($host, $user,$pass,$db );
                        # check connection
                       if ($mysql->connect_errno) {
                            //SQL connection error.
                           echo "<p>MySQL error no {$mysql->connect_errno} : {$mysql->connect_error}</p>";
                          exit();
                       }
                        ## query database
                        # prepare data for insertion
                        $SID   = $_POST['SID'];
                        $PIS   = $_POST['PIS'];
                        $Con   = $_POST['Con'];
                        $VisaType    = $_POST['VisaType'];
                        $year        = $_POST['year'];

                     
                        # check if SID and year exist else insert
                        $exists = 0;
                        $result = $mysql->query("SELECT SID from student WHERE SID= '{$SID}' LIMIT 1");
                        if ($result->num_rows == 1) {
                            $exists = 1;
                            $result = $mysql->query("SELECT year  from student WHERE year  = '{$year}' LIMIT 1");
                            if ($result->num_rows == 1) $exists = 2;    
                        } else {
                            $result = $mysql->query("SELECT year  from student WHERE year  = '{$year}' LIMIT 1");
                            if ($result->num_rows == 1) $exists = 3;
                        }
                        if ($exists == 1){
                            // User already exists.
                            $SID_error = 2;
                            echo "user  already exists.";
                            //$link = "<script>window.open('register.php?er_u=$SID_error&er_p=$PIS_error&er_e=$year _error&er_fn=$Con_error&er_ln=$VisaType_error','_self')</script>";
                            //echo $link;
                        } else if ($exists == 2){
                            //year and User already exists.
                            $SID_error = 2;
                            $year_error = 2;
                            echo "year and user already exists.";
                           // $link = "<script>window.open('register.php?er_u=$SID_error&er_p=$PIS_error&er_e=$year _error&er_fn=$VisaType_error&er_ln=$VisaType_error','_self')</script>";
                           // echo $link;
                        } else if ($exists == 3){
                            echo "year  already exists.";
                            $year_error = 2;
                           // $link = "<script>window.open('register.php?er_u=$SID_error&er_p=$PIS_error&er_e=$year _error&er_fn=$VisaType_error&er_ln=$VisaType_error','_self')</script>";
                            //echo $link;
                        } else if ($SID_error == 1 || $SID_error == 3 || $PIS_error == 1 || $PIS_error == 2 || $Con_error == 1 || $Con_error == 3 || $VisaType_error == 1 || $VisaType_error == 2 || $year_error == 1 || $year_error == 2){
                        //else if ($username_error == 1 || $username_error == 3 || $password_error == 1 || $password_error == 2 || $email_error == 1 || $email_error == 3 || $first_name_error == 1 || $first_name_error == 2 || $last_name_error == 1 || $last_name_error == 2){
                            // If any of the inputs are left blank.
                             echo "Fields are blank......";
                           // $link = "<script>window.open('register.php?er_u=$SID_error&er_p=$PIS_error&er_e=$year _error&er_fn=$VisaType_error&er_ln=$VisaType_error','_self')</script>";
                           // echo $link;
                        } else {

                        
                            # insert data into mysql database
                            $sql = "INSERT  INTO `student` (`SID`, `PIS`, `Con`, `VisaType`, `year `) 
                            VALUES ('{$SID}', '{$PIS}', '{$Con}', '{$VisaType}', '{$year}')";
                           // mysql_query($sql,$con);
                            //mysql_close($con);
                            if ($mysql->query($sql)) {
                                 echo "Register successful.";
                                //$link = "<script>window.open('index.php','_self')</script>";
                               // echo $link;
                            } else {
                                //SQL error.
                                 echo "Register is not successful.";
                                //echo "<p>MySQL error no {$mysql->errno} : {$mysql->error}</p>";
                            }
                        //}
                    }
                 ?>
                    */



