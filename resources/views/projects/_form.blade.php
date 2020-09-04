@csrf

    <div class="form-group">
        <label for="">
            Titulo del proyecto <br>
            <input class="form-control border-0 bg-light shadow-sm" type="text" id="url" name="title" value="{{old('title',$project->title)}}">
        </label>
    </div>

    <div class="form-group">
        <label for="">
            URL del proyecto <br>
            <input class="form-control border-0 bg-light shadow-sm"   type="text" name="url" value="{{old('title',$project->url)}}">
        </label>
    </div>

    <div class="form-group">
        <label for="">
            Descripcion del proyecto <br>
            <textarea class="form-control border-0 bg-light shadow-sm"  name="description">value="{{old('title',$project->description)}}</textarea>
        </label>
    </div>
    
  
    <button class="btn btn-primary btn-lg btn-block" type="submit">{{$btnText}}</button>