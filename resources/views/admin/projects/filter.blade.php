<form action="">

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="search all">Search all the matching characters here</label>
                <input type="text" name="search" class="form-control" value="@if(Request::input('search')!=''){{Request::input('search')}} @endif">
                {{-- yo value li line break garara enter hano vana mathi url mildaina so autai line ma raknuparxa --}}
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Project Type</label>
                    <select name="project_type_id" class="form-control">
                            <option value="">Select Project Type</option>
                            @foreach($types as $type)
                            <option value="{{$type->id}}">
                                {{$type->type_name}}
                            </option>
                            @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Customers</label>
                        <select name="customer_id" class="form-control">
                                <option value="">Select Customer</option>
                                @foreach($customers as $customer)
                                <option value="{{$customer->id}}">
                                    {{$customer->fullName()}}
                                </option>
                                @endforeach
                        </select>
                </div>
            </div>
            <div class="col-md-2">
                <br>
                <button name="q" type="submit" class="btn btn-success">Search</button>
            </div>

        </div>

        {{csrf_field()}}
    </form>
