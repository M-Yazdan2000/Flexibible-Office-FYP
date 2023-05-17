@include('layouts.header')

<body>

  {{-- Navbar Searching --}}
    <div class="container mt-5" style="    margin-top: 7rem!important;">
      <form action="{{ route('search') }}" method="get" role="form" class="search-form">

      <form class="mt-5">
        <div class="row align-items-end">
          <div class="col-md-3">
            <div class="form-group">
              <label for="nameInput">Sarch By Name:</label>
              <input type="text" class="form-control" id="nameInput" placeholder="Enter a name or property type">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="officeTypeDropdown">Office Type:</label>
              <select class="form-select" id="officeTypeDropdown">
                <option selected disabled>Select an office type</option>
                <option>Hot Desk</option>
                <option>Open Office</option>
                <option>Coworking Space</option>
                <option>Meeting Rooms</option>

              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="locationDropdown">Location:</label>
              <select class="form-select" id="locationDropdown">
                <option selected disabled>Select a location</option>
                <option>Islamabad</option>
                <option>Karachi </option>
                <option>Lahore</option>
                <option>Rawalpindi</option>
                <!-- Add more location options here -->
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <button type="submit" class="btn btn-primary">Search</button>
          </div>
        </div>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>


  </div>
  {{-- End Navbar Searching Module  --}}

  {{-- Property List --}}
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
            <img src="img/block1.jpg" class="card-img-top" alt="Property Image">
          <div class="card-body">
            <h5 class="card-title">Co Working Space</h5>
            <p class="card-text">A shared place mostly rent by Freelancers</p>
            <p class="card-text">Price: RS: 20000</p>
            <p class="card-text">Location: Bahria Town, Rawalpindi</p>
            <div class="btn-group" role="group" aria-label="Property Actions">
              <button type="button" class="btn btn-outline-danger like-btn">Like</button>
              <button type="button" class="btn btn-outline-primary view-btn" data-bs-toggle="modal" data-bs-target="#propertyModal1">View Details</button>
              <button type="button" class="btn btn-outline-success cart-btn">Add to Cart</button>
            </div>
          </div>
        </div>
        <!-- Property Details Modal -->
        <div class="modal fade" id="propertyModal1" tabindex="-1" aria-labelledby="propertyModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 80%;">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="propertyModalLabel">Coworking Space</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p> Rooms : 1 | Bath : 2 | Desk : 20 |  Meeting Rooms : 2 </p>
                <p>Parking : Yes</p>
                <p>Seaprate Accessories : Yes</p>
                <p>Details: </p>
                <!-- Add more details here -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Card 2 --}}
      <div class="col-md-4">
        <div class="card">
     <img src="img/block2.jpg" height="285px" class="card-img-top" alt="Property Image">
          <div class="card-body">
            <h5 class="card-title">Hot Desk Space</h5>
            <p class="card-text">This is hot desk space</p>
            <p class="card-text">Price: RS: 20000</p>
            <p class="card-text">Location: Bahria Town, Rawalpindi</p>
            <div class="btn-group" role="group" aria-label="Property Actions">
              <button type="button" class="btn btn-outline-danger like-btn">Like</button>
              <button type="button" class="btn btn-outline-primary view-btn" data-bs-toggle="modal" data-bs-target="#propertyModal2">View Details</button>
              <button type="button" class="btn btn-outline-success cart-btn">Add to Cart</button>
            </div>
          </div>
        </div>
        <!-- Property Details Modal -->
        <div class="modal fade" id="propertyModal2" tabindex="-1" aria-labelledby="propertyModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 80%;">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="propertyModalLabel">Hot Desk Space</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Hot Desk Space</p>
                <p>Price: RS: 20,000</p>
                <p>Location: Bahria Town, Rawalpindi</p>
                <p>Details: </p>
                <!-- Add more details here -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Card 3 --}}
      <div class="col-md-4">
        <div class="card">
                <img src="img/block3.jpeg" height="285px" class="card-img-top" alt="Property Image">
          <div class="card-body">
            <h5 class="card-title">Open Office Space</h5>
            <p class="card-text">This is open office space</p>
            <p class="card-text">Price: RS: 20000</p>
            <p class="card-text">Location: Bahria Town, Rawalpindi</p>
            <div class="btn-group" role="group" aria-label="Property Actions">
              <button type="button" class="btn btn-outline-danger like-btn">Like</button>
              <button type="button" class="btn btn-outline-primary view-btn" data-bs-toggle="modal" data-bs-target="#propertyModal3">View Details</button>
              <button type="button" class="btn btn-outline-success cart-btn">Add to Cart</button>
            </div>
          </div>
        </div>
        <!-- Property Details Modal -->
        <div class="modal fade" id="propertyModal3" tabindex="-1" aria-labelledby="propertyModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 80%;">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="propertyModalLabel3">Open Office Space</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Open Office Space</p>
                <p>Price: RS: 20,000</p>
                <p>Location: Bahria Town, Rawalpindi</p>
                <p>Details: </p>
                <!-- Add more details here -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- ROW 2 --}}
    <div class="row mt-5">
      <div class="col-md-4">
        <div class="card">
       <img src="img/block4.jpeg" height="265px" class="card-img-top" alt="Property Image">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">A shared place mostly rent by Freelancers</p>
            <p class="card-text">Price: RS: 20000</p>
            <p class="card-text">Location: Bahria Town, Rawalpindi</p>
            <div class="btn-group" role="group" aria-label="Property Actions">
              <button type="button" class="btn btn-outline-danger like-btn">Like</button>
              <button type="button" class="btn btn-outline-primary view-btn" data-bs-toggle="modal" data-bs-target="#propertyModal4">View Details</button>
              <button type="button" class="btn btn-outline-success cart-btn">Add to Cart</button>
            </div>
          </div>
        </div>
        <!-- Property Details Modal -->
        <div class="modal fade" id="propertyModal4" tabindex="-1" aria-labelledby="propertyModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 80%;">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="propertyModalLabel">Coworking Space</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Co Working Space</p>
                <p>Price: RS: 20,000</p>
                <p>Location: Bahria Town, Rawalpindi</p>
                <p>Details: </p>
                <!-- Add more details here -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Card 2 --}}
      <div class="col-md-4">
        <div class="card">
         <img src="img/block5.jpg"  height="265px"class="card-img-top" alt="Property Image">
          <div class="card-body">
            <h5 class="card-title">Hot Desk Space</h5>
            <p class="card-text">This is hot desk space</p>
            <p class="card-text">Price: RS: 20000</p>
            <p class="card-text">Location: Bahria Town, Rawalpindi</p>
            <div class="btn-group" role="group" aria-label="Property Actions">
              <button type="button" class="btn btn-outline-danger like-btn">Like</button>
              <button type="button" class="btn btn-outline-primary view-btn" data-bs-toggle="modal" data-bs-target="#propertyModal5">View Details</button>
              <button type="button" class="btn btn-outline-success cart-btn">Add to Cart</button>
            </div>
          </div>
        </div>
        <!-- Property Details Modal -->
        <div class="modal fade" id="propertyModal5" tabindex="-1" aria-labelledby="propertyModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 80%;">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="propertyModalLabel">Hot Desk Space</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Hot Desk Space</p>
                <p>Price: RS: 20,000</p>
                <p>Location: Bahria Town, Rawalpindi</p>
                <p>Details: </p>
                <!-- Add more details here -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Card 3 --}}
      <div class="col-md-4">
        <div class="card">
   <img src="img/block6.jpg" height="265px" class="card-img-top" alt="Property Image">
          <div class="card-body">
            <h5 class="card-title">Open Office Space</h5>
            <p class="card-text">This is open office space</p>
            <p class="card-text">Price: RS: 20000</p>
            <p class="card-text">Location: Bahria Town, Rawalpindi</p>
            <div class="btn-group" role="group" aria-label="Property Actions">
              <button type="button" class="btn btn-outline-danger like-btn">Like</button>
              <button type="button" class="btn btn-outline-primary view-btn" data-bs-toggle="modal" data-bs-target="#propertyModal6">View Details</button>
              <button type="button" class="btn btn-outline-success cart-btn">Add to Cart</button>
            </div>
          </div>
        </div>
        <!-- Property Details Modal -->
        <div class="modal fade" id="propertyModal6" tabindex="-1" aria-labelledby="propertyModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 80%;">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="propertyModalLabel3">Open Office Space</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Open Office Space</p>
                <p>Price: RS: 20,000</p>
                <p>Location: Bahria Town, Rawalpindi</p>
                <p>Details: </p>
                <!-- Add more details here -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- ROW 3 --}}
    <div class="row mt-5">
      <div class="col-md-4">
        <div class="card">
         <img src="img/block7.webp" height="265px" class="card-img-top" alt="Property Image">
          <div class="card-body">
            <h5 class="card-title">Hot Desk Space</h5>
            <p class="card-text">A shared place mostly rent by Freelancers</p>
            <p class="card-text">Price: RS: 20000</p>
            <p class="card-text">Location: Bahria Town, Rawalpindi</p>
            <div class="btn-group" role="group" aria-label="Property Actions">
              <button type="button" class="btn btn-outline-danger like-btn">Like</button>
              <button type="button" class="btn btn-outline-primary view-btn" data-bs-toggle="modal" data-bs-target="#propertyModal7">View Details</button>
              <button type="button" class="btn btn-outline-success cart-btn">Add to Cart</button>
            </div>
          </div>
        </div>
        <!-- Property Details Modal -->
        <div class="modal fade" id="propertyModal7" tabindex="-1" aria-labelledby="propertyModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 80%;">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="propertyModalLabel">Coworking Space</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Co Working Space</p>
                <p>Price: RS: 20,000</p>
                <p>Location: Bahria Town, Rawalpindi</p>
                <p>Details: </p>
                <!-- Add more details here -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Card 2 --}}
      <div class="col-md-4">
        <div class="card">
         <img src="img/Blick1.jpeg" class="card-img-top" height="290px" alt="Property Image No">
          <div class="card-body">
            <h5 class="card-title">Hot Desk Space</h5>
            <p class="card-text">This is hot desk space</p>
            <p class="card-text">Price: RS: 20000</p>
            <p class="card-text">Location: Bahria Town, Rawalpindi</p>
            <div class="btn-group" role="group" aria-label="Property Actions">
              <button type="button" class="btn btn-outline-danger like-btn">Like</button>
              <button type="button" class="btn btn-outline-primary view-btn" data-bs-toggle="modal" data-bs-target="#propertyModal8">View Details</button>
              <button type="button" class="btn btn-outline-success cart-btn">Add to Cart</button>
            </div>
          </div>
        </div>
        <!-- Property Details Modal -->
        <div class="modal fade" id="propertyModal8" tabindex="-1" aria-labelledby="propertyModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 80%;">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="propertyModalLabel8">Hot Desk Space</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Hot Desk Space</p>
                <p>Price: RS: 20,000</p>
                <p>Location: Bahria Town, Rawalpindi</p>
                <p>Details: </p>
                <!-- Add more details here -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Card 3 --}}
      <div class="col-md-4">
        <div class="card">
          <img src="img/b-5.jpg" height="290px" class="card-img-top" alt="Property Image">
          <div class="card-body">
            <h5 class="card-title">Open Office Space</h5>
            <p class="card-text">This is open office space</p>
            <p class="card-text">Price: RS: 20000</p>
            <p class="card-text">Location: Bahria Town, Rawalpindi</p>
            <div class="btn-group" role="group" aria-label="Property Actions">
              <button type="button" class="btn btn-outline-danger like-btn">Like</button>
              <button type="button" class="btn btn-outline-primary view-btn" data-bs-toggle="modal" data-bs-target="#propertyModal9">View Details</button>
              <button type="button" class="btn btn-outline-success cart-btn">Add to Cart</button>
            </div>
          </div>
        </div>
        <!-- Property Details Modal -->
        <div class="modal fade" id="propertyModal9" tabindex="-1" aria-labelledby="propertyModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 80%;">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="propertyModalLabel9">Open Office Space</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Open Office Space</p>
                <p>Price: RS: 20,000</p>
                <p>Location: Bahria Town, Rawalpindi</p>
                <p>Details: </p>
                <!-- Add more details here -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>



  <script>

$(document).ready(function() {
  $('.like-btn').click(function() {
    $(this).toggleClass('btn-danger');
  });

  // $('.view-btn').click(function() {
  //   var propertyDetails = $(this).closest('.card-body').find('.card-text').not(':last').text();
  //   alert(propertyDetails);
  // });

  $('.cart-btn').click(function() {
    alert("Please login");
  });
});
</script>



</body>


@include('layouts.footer')

