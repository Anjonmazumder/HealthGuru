$(function() {
    
    $('#btn-plus-effect').click(function() {
        var effectTextBox = '<input type="text" name="effect[]" class="form-control plus-txt" placeholder="Effect" required>';
        $('#effect-group').append(effectTextBox);
    });
    $('#btn-plus-symptom').click(function() {
        var effectTextBox = '<input type="text" name="symptom[]" class="form-control plus-txt" placeholder="Symptom" required>';
        $('#symptom-group').append(effectTextBox);
    });
    $('#btn-plus-cure').click(function() {
        var cureTextBox = '<hr><input type="text" name="cure[]" class="form-control plus-txt" placeholder="Food Name" required>' +
                '<textarea name="curedesc[]" id="" class="form-control plus-txt" cols="30" rows="10" placeholder="Description" required></textarea>' +
                '<input name="cure-img[]" type="file" class="form-control plus-txt" required/>';
        $('#cure-group').append(cureTextBox);
    });
    $('#btn-plus-dis').click(function() {
        var disTextBox = '<input type="file" name="dis_image[]" class="form-control plus-txt" required/>';
        $('#dis-group').append(disTextBox);
    });
    
});

