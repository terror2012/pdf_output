/**
 * Created by Asus on 4/27/2017.
 */

var number_of_prod = 1;
var product_field_id = $('#prod_info');

function add_new_fields()
{
    number_of_prod += 1;
    var stuff = '<div class="required field"><label>Service Description</label><input maxlength="45" type="text" id="servicedescription_' + number_of_prod + '" name="servicedescription_' + number_of_prod + '" placeholder="Enter Service Description" required/></div><div class="required field"><label>Net Amount</label><input type="number" min="0" id="netamount_' + number_of_prod + '" name="netamount_' + number_of_prod + '" placeholder="Enter Net Amount" required/></div><div class="required field"><label>VAT Code</label><select class="ui fluid dropdown" id="vatcode_' + number_of_prod + '" name="vatcode_' + number_of_prod + '" required><option value="0%">0%</option><option value="4%">4%</option><option value="10%">10%</option><option value="15%">15%</option><option value="18%">18%</option><option value="22%">22%</option></select></div><div class="required field"><label>VAT Amount</label><input type="number" min="0" id="vatamount_' + number_of_prod + '" name="vatamount_' + number_of_prod + '" placeholder="Enter VAT Amount" required/></div>';
    product_field_id.append(stuff);
}