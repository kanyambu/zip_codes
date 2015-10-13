
<form action="{{url('zip_code/create')}}" method="get" accept-charset="utf-8">
  <label for="ZipCode">ZipCode</label>
   <br>
  <input type="Zipcode" name="ZipCode" value="" id="ZipCode">
 <br>
  <label for="City">City</label>
   <br>
  <input type="City" name="City" value="" id="City">
  <br>
  <label for="State">State</label>
   <br>
  <input type="State" name="State" value="" id="State">
   <br>
  <label for="Zip">Zip</label>
   <br>
  <input type="Zip" name="Zip" value="" id="Zip">
  <br>
  <input type="hidden" name="_token" value="{{csrf_token()}}" id="">

     <p><input type="submit" value="search"></p>
</form>


   