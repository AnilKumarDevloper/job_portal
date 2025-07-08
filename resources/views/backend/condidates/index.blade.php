@extends('layouts.backend.main')
@section('main-section')
 
 <div class="page-wrapper">
    
      <div class="page-titles" style="padding-bottom: 0px !important;">
          <div class="row"> 
            <div class="col-12 align-self-center">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 d-flex align-items-center">
                  <li class="breadcrumb-item">
                    <a href="{{ route('backend.dashboard') }}" class="link"><i class="ri-home-3-line fs-5"></i></a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Candidates</li>
                </ol> 
              </nav> 
            </div>  

            <div class="col-12 mt-4 tabBN">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                          <button class="nav-link active tabBTNs" id="pills-candidates-tab" data-bs-toggle="pill" data-bs-target="#pills-candidates"
                              type="button" role="tab" aria-controls="pills-candidates" aria-selected="true">
                              Candidates
                          </button>
                      </li>
                      <li class="nav-item" role="presentation">
                          <button class="nav-link tabBTNs" id="pills-degree-tab" data-bs-toggle="pill" data-bs-target="#pills-degree"
                              type="button" role="tab" aria-controls="pills-degree" aria-selected="false">
                              Degree Levels
                          </button>
                      </li>
                      <li class="nav-item" role="presentation">
                          <button class="nav-link tabBTNs" id="pills-reported-tab" data-bs-toggle="pill" data-bs-target="#pills-reported"
                              type="button" role="tab" aria-controls="pills-reported" aria-selected="false">
                              Reported Candidates
                          </button>
                      </li>
                      <li class="nav-item" role="presentation">
                          <button class="nav-link tabBTNs" id="pills-resumes-tab" data-bs-toggle="pill" data-bs-target="#pills-resumes"
                              type="button" role="tab" aria-controls="pills-resumes" aria-selected="false">
                              All Resumes
                          </button>
                      </li>
                      <li class="nav-item" role="presentation">
                          <button class="nav-link tabBTNs" id="pills-selected-tab" data-bs-toggle="pill" data-bs-target="#pills-selected"
                              type="button" role="tab" aria-controls="pills-selected" aria-selected="false">
                              Selected Candidates
                          </button>
                      </li>
                     
                 </ul>
            </div>

          </div> 

      </div>

      <div class="container-fluid pt-0">
        <!-- row --> 

           <div class="tab-content" id="pills-tabContent"> 

                    <div class="tab-pane fade show active" id="pills-candidates" role="tabpanel" aria-labelledby="pills-candidates-tab">
                          <!--- data -->
                          <div class="row mb-4">  
                              <div class="col-12 d-flex justify-content-end gap-3 flex-wrap">
                                  <a href="{{ route('backend.condidate_create') }}" class="btn btn-sm d-flex align-items-center justify-content-center m-0 w-100 addButton"  style="padding: 8px; max-width: 210px;">
                                          <i class="ri-add-line me-1"></i>
                                          <span> Add Condidates</span>
                                  </a> 
                                    <button class="btn btn-sm d-flex align-items-center justify-content-center m-0 w-100 addButton"  style="padding: 8px; max-width: 210px;">
                                          <i class="ri-add-line me-1"></i>
                                          <span> Export to Excel</span>
                                  </button> 
                              </div> 
                        </div>
                          <div class="row">  
                              <div class="col-12">
                                  <div class="card borderRadius">
                                      <div class="card-body p-0 table-responsive">
                                          
                                          <table class="table tableStyle mb-0 dataTable" id="zero_config_condidates">
                                              <thead>
                                                  <tr>
                                                      <th scope="col" style="width: 50px;">S.N</th>
                                                      <th scope="col">Candidate Name</th>
                                                      <th scope="col" class="text-center">Available At</th>
                                                      <th scope="col" class="text-center">Email Verified</th>
                                                      <th scope="col" class="text-center">Status</th>
                                                      <th scope="col" class="text-center">Last Changes By</th>
                                                      <th scope="col"  style="text-align: right;">Actions</th>
                                                  </tr>
                                              </thead>

                                              <tbody>
                                                  <tr>
                                                      <td scope="row">1</td>
                                                      <td class="">
                                                          <p class="nameTexts m-0">Deepak</p>
                                                          <p class="m-0 emailsEmp">Deepat@gmail.com</p>
                                                      </td>
                                                      <td class="text-center d-flex justify-content-center"> 

                                                           <span class="badge rounded-pill font-weight-medium bg-light-info text-info ">Immediate Available</span>
                                                        
                                                      </td>
                                                      <td class="text-center ">
                                                           <span class="reloaduser"><a href="#"><i class="ri-loop-right-line"></i></a></span>
                                                      </td>
                                                      <td>
                                                            <div class="form-check form-switch d-flex justify-content-center">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked style="width: 2.5em;"> 
                                                            </div>
                                                      </td>
                                                      <td class="d-flex justify-content-center"> 
                                                          <span class="badge rounded-pill font-weight-medium bg-light-secondary text-secondary">Super Admin</span> 
                                                      </td> 
                                                      <td>
                                                          <div class="button--group d-flex justify-content-end">
                                                              <a href="condidates_Edit.html" class="btn btn-sm  editButtons" >
                                                                  <i class="ri-edit-box-line"></i> 
                                                              </a>
                                                              <button  class="btn btn-sm btn-outline--danger border-danger confirmationBtn delete_condidates" >
                                                                  <i class="ri-delete-bin-line"></i>
                                                              </button>
                                                          </div>
                                                      </td>
                                                  </tr>   
                                                    

                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </div> 
                      <!--- data end-->

                    </div>

                    <div class="tab-pane fade" id="pills-degree" role="tabpanel" aria-labelledby="pills-degree-tab">

                            <!--- data -->
                          <div class="row mb-4">  
                              <div class="col-12 d-flex justify-content-end gap-3 flex-wrap">
                                  <a href="condidates_Add.html" class="btn btn-sm d-flex align-items-center justify-content-center m-0 w-100 addButton" 
                                      style="padding: 8px; max-width: 210px;" data-bs-toggle="modal" data-bs-target="#degree_add">
                                          <i class="ri-add-line me-1"></i>
                                          <span> Add</span>
                                  </a> 
                              
                              </div> 
                        </div>
                          <div class="row">  
                              <div class="col-12">
                                  <div class="card borderRadius">
                                      <div class="card-body p-0 table-responsive ">
                                          
                                          <table class="table tableStyle mb-0 dataTable" id="zero_config_digree_levels">
                                              <thead>
                                                  <tr>
                                                      <th scope="col" style="width: 50px;">S.N</th>
                                                      <th scope="col">Candidate Name</th>
                                                      
                                                      <th scope="col" class="text-center">Create Date</th>
                                                      <th scope="col"  style="text-align: right;">Actions</th>
                                                  </tr>
                                              </thead>

                                              <tbody>
                                                  <tr>
                                                      <td scope="row">1</td>
                                                      <td class="">
                                                          <p class="nameTexts m-0">Deepak</p>
                                                          <p class="m-0 emailsEmp">Deepat@gmail.com</p>
                                                      </td> 
                                                      <td class="d-flex justify-content-center"> 
                                                          <span class="badge rounded-pill font-weight-medium bg-light-secondary text-secondary">	9th May, 2025</span> 
                                                      </td> 
                                                      <td>
                                                          <div class="button--group d-flex justify-content-end">
                                                              <button  class="btn btn-sm  editButtons" data-bs-toggle="modal" data-bs-target="#degree_edit" >
                                                                  <i class="ri-edit-box-line"></i> 
                                                              </button>
                                                              <button  class="btn btn-sm btn-outline--danger border-danger confirmationBtn delete_condidates" >
                                                                  <i class="ri-delete-bin-line"></i>
                                                              </button>
                                                          </div>
                                                      </td>
                                                  </tr>   
                                                    

                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </div> 
                      <!--- data end-->

                    </div>

                    <div class="tab-pane fade" id="pills-reported" role="tabpanel" aria-labelledby="pills-reported-tab">
                                <!--- data -->
                        
                          <div class="row">  
                              <div class="col-12">
                                  <div class="card borderRadius">
                                      <div class="card-body p-0 table-responsive">
                                          
                                          <table class="table tableStyle mb-0 dataTable" id="zero_config_reported">
                                              <thead>
                                                  <tr>
                                                      <th scope="col" style="width: 50px;">S.N</th>
                                                      <th scope="col">Candidate Name</th>
                                                      
                                                      <th scope="col" class="text-center">Reported By</th>
                                                      <th scope="col" class="text-center">Reported On</th>
                                                      <th scope="col"  style="text-align: right;">Actions</th>
                                                  </tr>
                                              </thead>

                                              <tbody>
                                                  <tr>
                                                      <td scope="row">1</td>
                                                      <td class="">
                                                          <p class="nameTexts m-0">Deepak</p>
                                                          <p class="m-0 emailsEmp">Deepat@gmail.com</p>
                                                      </td> 

                                                        <td class="text-center"> 
                                                            Pega systems
                                                       </td> 

                                                      <td class="d-flex justify-content-center"> 
                                                          <span class="badge rounded-pill font-weight-medium bg-light-secondary text-secondary">	9th May, 2025</span> 
                                                      </td> 
                                                      <td>
                                                          <div class="button--group d-flex justify-content-end">
                                                             
                                                              <button  class="btn btn-sm btn-outline--danger border-danger confirmationBtn delete_condidates" >
                                                                  <i class="ri-delete-bin-line"></i>
                                                              </button>
                                                          </div>
                                                      </td>
                                                  </tr>   
                                                    

                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </div> 
                      <!--- data end-->
                    </div>

                    <div class="tab-pane fade" id="pills-resumes" role="tabpanel" aria-labelledby="pills-resumes-tab">
                          <!---alll resume start  ----->
                               <div class="row">  

                                  <div class="col-12"> 
                                        <div class="card borderRadius"> 
                                          <div class="col-12">
                                                <form>
                                                    <div class="row p-3">
                                                          <div class="form-input col-md-3 col-12 mb-2">
                                                                <input type="number" class="form-control yearExp" maxlength="2" placeholder="Experience">
                                                          </div>
                                                          <div class="form-input col-md-3 col-12 mb-2">
                                                                <input type="text" class="form-control" placeholder="Designation">
                                                          </div>
                                                          <div class="form-input col-4 mb-2"> 
                                                                  <button type="submit" class="btn btn-info">Search</button>
                                                          </div>
                                                    </div>
                                                </form>
                                          </div>
                                          <div class="card-body p-0 table-responsive">
                                               
                                              <table class="table tableStyle mb-0 ">
                                                  <thead>
                                                      <tr>
                                                          <th scope="col" style="width: 50px;">S.N</th>
                                                          <th scope="col" >Candidate Name</th>
                                                          <th scope="col" class="text-center">Designation</th>
                                                          <th scope="col" class="text-center">Experience</th>
                                                          <th scope="col" class="text-center">Available At</th>
                                                          <th scope="col" class="text-center">Title</th>
                                                          <th scope="col"  style="text-align: center;">Download</th>
                                                          <th scope="col"  style="text-align: center;">Send shortlist</th>
                                                      </tr>
                                                  </thead>

                                                  <tbody>
                                                      <tr>
                                                          <td scope="row">1</td>
                                                          <td class="">
                                                              <p class="nameTexts m-0">Deepak</p>
                                                              <p class="m-0 emailsEmp">Deepat@gmail.com</p>
                                                          </td> 
                                                            <td class="text-center">React.Js</td>
                                                            <td class="text-center">2.5 Year</td>
                                                            <td class="d-flex justify-content-center">
                                                                <span class="badge rounded-pill font-weight-medium bg-light-info text-info ">Immediate Available</span>
                                                            </td>
                                                            <td class="text-center">   Resume </td>  
                                                            
                                                         
                                                            <td>
                                                                <div class="button--group d-flex justify-content-center">
                                                                  
                                                                    <button  class="btn btn-sm text-white  btn-primary" >
                                                                        <i class="ri-download-line"></i>
                                                                    </button>
                                                                </div>
                                                            </td>

                                                            <td class="d-flex justify-content-center">
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="checkbox" role="switch" id="shortlist_candidate" style="width: 40px;"> 
                                                                  </div>
                                                            </td>


                                                      </tr>   
                                                        

                                                  </tbody>
                                                  
                                              </table>
                                              
                                          </div>
                                      </div>
                                  </div>
                              </div> 
                          <!---alll resume end  ----->
                    </div>

                    <div class="tab-pane fade" id="pills-selected" role="tabpanel" aria-labelledby="pills-selected-tab">

                           <div class="row">  
                              <div class="col-12">
                                  <div class="card borderRadius">
                                      <div class="card-body p-0 table-responsive">
                                          
                                          <table class="table tableStyle mb-0 dataTable" id="selected_condidate">
                                              <thead>
                                                  <tr>
                                                      <th scope="col" style="width: 50px;">S.N</th>
                                                      <th scope="col">Candidate Name</th> 
                                                      <th scope="col" class="text-center">Employer Name</th>
                                                      <th scope="col" class="text-center">Status</th>
                                                      <th scope="col"  style="text-align: center;">Job Details</th> 
                                                  </tr>
                                              </thead>

                                              <tbody>
                                                  <tr>
                                                      <td scope="row">1</td>
                                                      <td class="">
                                                          <p class="nameTexts m-0">Deepak</p>
                                                          <p class="m-0 emailsEmp">Deepat@gmail.com</p>
                                                      </td> 

                                                        <td class="text-center"> 
                                                              deepak 
                                                        </td> 

                                                      <td class="d-flex justify-content-center"> 
                                                          <span class="badge rounded-pill font-weight-medium bg-light-info text-info ">Immediate Available</span>
                                                      </td> 
                                                      <td>
                                                          <div class="button--group d-flex justify-content-center">
                                                             
                                                               <button  class="btn btn-sm text-white  btn-primary" >
                                                                     <i class="ri-eye-line"></i>
                                                                </button>
                                                          </div>
                                                      </td>

                                                      
                                                  </tr>   
                                                    

                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </div> 

                    </div>
             
          </div>  

      </div> 

    </div>

          <!--------------------modal start------------------->
        <!--  degree_add  -->
        <div class="modal fade" id="degree_add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Degree Level</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                    <div class="col-12 ">
                      <div class="form-group"> 
                          <label class="text-dark">Name <span class="text-danger"> *</span></label>
                          <input type="text" placeholder="Name" class="form-control typeText" required > 
                      </div>
                    </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </div>

        <!--  degree_edit  -->
        <div class="modal fade" id="degree_edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Degree Level</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                    <div class="col-12 ">
                      <div class="form-group"> 
                          <label class="text-dark">Name <span class="text-danger"> *</span></label>
                          <input type="text" placeholder="Name" class="form-control typeText" required > 
                      </div>
                    </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </div>
          <!--------------------modal end-->
 
 
  </div>


  </div>

  @section('javascript-section')
  @endsection
@endsection