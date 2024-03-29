<!-- schools/_form.blade.php -->
<div class="form-group">
    <label for="name">Nom:</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ isset($school) ? $school->name : '' }}">
</div>
<div class="form-group">
    <label for="location">Emplacement:</label>
    <input type="text" class="form-control" id="location" name="location" value="{{ isset($school) ? $school->location : '' }}">
</div>
