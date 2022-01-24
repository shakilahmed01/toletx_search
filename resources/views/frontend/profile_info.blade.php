<style>

</style>
                <!-- profile info -->
                <div class="col-md-4 center-block " >
                    <div class="row profile  ml-5">
                          <a  href="{{route('profile')}}" class="img-a ">
                            <div class="text-center"  >
                            <img  src="{{ asset('uploads/auth') }}/{{Auth::user()->n_photo}}" class="rounded-circle mx-auto img-img"  alt="" srcset="">
                            <i class="fas fa-edit edit edit-img-icon"></i>
                            </div>


                          </a>
                          <!-- <a href="#" class="edit-img-anchor">
                            <i class="fas fa-edit edit edit-img-icon"></i>
                          </a>  -->

                        </div>
                        <div class="name">
	                            <h3 class="title">{{Auth::user()->name}}</h3>

								<h6>Father Name:{{Auth::user()->father_name}}</h6>
								<h6>Mother Name:{{Auth::user()->mother_name}}</h6>
								<h6>Date Of Birth:{{Auth::user()->date_of_birth}}</h6>

               <div class=" text-center">
                  <a href="# " class=" " data-toggle="tooltip" data-placement="top" title="Badge 1" >
                      <i class="fas fa-medal"></i>
                    </a>
                    <a href="# " class=" " data-toggle="tooltip" data-placement="top" title="Badge 2" >
                      <i class="fas fa-medal"  ></i>
                    </a>
                    <a href="# " class=" " data-toggle="tooltip" data-placement="top" title="Badge 3" >
                      <i class="fas fa-medal"></i>
                    </a>
               </div>

	                      </div>
                       <!-- <p class=profilen1 id="profile-name text-center">{{Auth::user()->name}}</p> -->
                    </div>

<!-- Enable tooltop -->
  <script>
     $(function () {
      $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
