<div class="form-group">
    <label for="sector" class="col-sm-2 control-label">Сектор</label>
    <div class="col-sm-5">
        {{Form::select('sector', Planet::$sectors, null, ['class' => 'form-control'])}}
    </div>
</div>
<div class="form-group">
    <label for="level" class="col-sm-2 control-label">Рівень</label>
    <div class="col-sm-5">
        {{Form::text('level', null, array('class' => 'form-control'))}}
    </div>
</div>
<div class="form-group">
    <label for="star" class="col-sm-2 control-label">Зірка</label>
    <div class="col-sm-5">
        {{Form::text('star', null, array('class' => 'form-control'))}}
    </div>
</div>
<div class="form-group">
    <label for="system" class="col-sm-2 control-label">Система</label>
    <div class="col-sm-5">
        {{Form::text('system', null, array('class' => 'form-control'))}}
    </div>
</div>
<div class="form-group">
    <label for="planet" class="col-sm-2 control-label">Планета</label>
    <div class="col-sm-5">
        {{Form::text('planet', null, array('class' => 'form-control'))}}
    </div>
</div>
<div class="form-group">
    <label for="biome" class="col-sm-2 control-label">Біом</label>
    <div class="col-sm-5">
        {{Form::select('biome',Planet::$bioms, null, ['class'=> 'form-control'])}}
    </div>
</div>
<div class="form-group">
    <label for="x" class="col-sm-2 control-label">Координата X</label>
    <div class="col-sm-5">
        {{ Form::text('x', null, array('class' => 'form-control')) }}
    </div>
</div>
<div class="form-group">
    <label for="y" class="col-sm-2 control-label">Координата Y</label>
    <div class="col-sm-5">
        {{ Form::text('y', null, array('class' => 'form-control')) }}
    </div>
</div>
<div class="form-group">
    <label for="version" class="col-sm-2 control-label">Версія ігри</label>
    <div class="col-sm-5">
        {{Form::select('version',Planet::$versions, null, ['class'=> 'form-control'])}}
    </div>
</div>
<div class="form-group">
    <label for="os" class="col-sm-2 control-label">OS (операційна система)</label>
    <div class="col-sm-5">
        {{Form::select('os',Planet::$oses, null, ['class'=> 'form-control'])}}
    </div>
</div>
<div class="form-group">
    <label for="comment" class="col-sm-2 control-label">Коментар</label>
    <div class="col-sm-5">
        {{ Form::textarea('comment', null, array('class' => 'form-control bbeditor')) }}
    </div>
</div>