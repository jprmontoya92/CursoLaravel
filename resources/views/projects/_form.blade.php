@csrf
    <label for="">
        Titulo del proyecto <br>
        <input type="text" name="title" value="{{old('title',$project->title)}}">
    </label> <br>
    <label for="">
        URL del proyecto <br>
        <input type="text" name="url" value="{{old('title',$project->url)}}">
    </label> <br>
    <label for="">
        Descripcion del proyecto <br>
        <textarea name="description">value="{{old('title',$project->description)}}</textarea>
    </label>

    <br>
    <button type="submit">{{$btnText}}</button>