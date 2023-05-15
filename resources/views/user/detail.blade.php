<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      All Details <b></b>

      </b>
    </h2>
  </x-slot>



  <div class="py-12">
    <div class="container">
      <div class="row">

        <div class="col-md-7">
          <div class="card">

            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>{{session('success')}}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif

            <div class="card-header">All Cards </div>


            <div class="card-body" style="overflow:scroll">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Email</th>
                    <th scope="col">Location</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($details as $item)
                  <tr>
                    <td><img src="{{asset($item->photo)}}" style="height: 40px; width:80px;"></td>
                    <td>{{$item->fname}}</td>

                    <td>{{$item->position}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->location}}</td>
                    <td>{{$item->cname}}</td>

                    <td>
                      <a href="{{ route('pdf.download',$item->id) }}" class="btn btn-info ">Download</a>

                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>

        </div>


        <div class="col-md-5">
          <div class="card">
            <div class="card-header">Add Card </div>

            <div class="card-body">
              <form action="{{route('store.detail')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="fname">Full Name </label>
                      <input type="text" class="form-control" id="fname" name="fname">

                      @error('fname')
                      <span class="text-danger">{{$message}}</span>
                      @enderror

                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="position">Position </label>
                      <input type="text" class="form-control" id="position" name="position">

                      @error('position')
                      <span class="text-danger">{{$message}}</span>
                      @enderror

                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Active Email </label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                        aria-describedby="emailHelp">

                      @error('email')
                      <span class="text-danger">{{$message}}</span>
                      @enderror

                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="address">Address </label>
                      <input type="text" class="form-control" id="address" name="address">

                      @error('address')
                      <span class="text-danger">{{$message}}</span>
                      @enderror

                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="location">Map Location </label>
                      <input type="text" class="form-control" id="location" name="location">

                      @error('location')
                      <span class="text-danger">{{$message}}</span>
                      @enderror

                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="pnumber">Direct Line 1 </label>
                      <input type="number" class="form-control" id="pnumber" name="pnumber">

                      @error('pnumber')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="pnumber2">Direct Line 2</label>
                      <input type="number" class="form-control" id="pnumber2" name="pnumber2">

                      @error('pnumber2')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="pnumber3">Mobile</label>
                      <input type="number" class="form-control" id="pnumber3" name="pnumber3">

                      @error('pnumber3')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="whatsapp">Whatsapp Number</label>
                      <input type="number" class="form-control" id="whatsapp" name="whatsapp">

                      @error('whatsapp')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="products">Products/Services Link</label>
                      <input type="text" class="form-control" id="products" name="products">

                      @error('products')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="instagram">Instagram Account Link</label>
                      <input type="text" class="form-control" id="instagram" name="instagram">

                      @error('instagram')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="facebook">Facebook Account Link</label>
                      <input type="text" class="form-control" id="facebook" name="facebook">

                      @error('facebook')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="twitter">Twitter Account Link</label>
                      <input type="text" class="form-control" id="twitter" name="twitter">

                      @error('twitter')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="linkedin">LinkedIn Account Link</label>
                      <input type="text" class="form-control" id="linkedin" name="linkedin">

                      @error('linkedin')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="youtube">Youtube Account Link</label>
                      <input type="text" class="form-control" id="youtube" name="youtube">

                      @error('youtube')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="website">Website</label>
                      <input type="text" class="form-control" id="website" name="website">

                      @error('website')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="cname">Company Name </label>
                      <input type="text" class="form-control" id="cname" name="cname">

                      @error('cname')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="company_logo">Company Logo </label>
                      <input type="file" class="form-control" id="company_logo" name="company_logo">

                      @error('company_logo')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="photo">Your Picture </label>
                      <input type="file" class="form-control" id="photo" name="photo">

                      @error('photo')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Add Card</button>
                  </div>
                </div>
              </form>
            </div>

          </div>
        </div>



      </div>
    </div>
    <br>


    <!--- Trash Part--->



























  </div>
</x-app-layout>