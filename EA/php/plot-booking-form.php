<?php 

include_once '../include/init.php';

?>

<form class="form" action="plot-booking.php"method="POST">

      <h2>Particular of Allottee</h2>
      <label>
      <span style="color:red;font-weight: bold;"> <?php echo showSessionErr('fname_err');?></span>
        Full Name:
        <input type="text" name="fname"placeholder="Enter Your Name" />
      </label>
      <label>
        <span><?php echo showSessionErr('sdw_of_err');?></span>
        S/o,D/o,W/o:
        <input type="text" name="sdw_of"placeholder="Enter the Name" />
      </label>
      <div class="Info">
        <div class="pInfo-1">
          <label>
            Passport/CNIC:
            <input type="number"  placeholder="Enter Your Passport No/CNIC" />
          </label>
          <label>
            Permanent Addr:
            <input type="text" placeholder="Enter Your Address" />
          </label>
          <label>
            Address line 2:
            <input type="text" placeholder="Enter Your Address" />
          </label>
          <label>
            Email:
            <input type="email" placeholder="Enter Your Address" />
          </label>
        </div>
        <div class="pInfo-2">
          <label>
            Date Of Birth:
            <input type="date" placeholder="Enter Your Passport No/CNIC" />
          </label>
          <label>
            Mailing Address:
            <input type="text" placeholder="Enter Your Address" />
          </label>
          <label>
            Address line 2:
            <input type="text" placeholder="Enter Your Address" />
          </label>
          <label>
            Cell No #:
            <input type="number" placeholder="Enter Your Address" />
          </label>
        </div>
      </div>
    <!-- </form>
    <form class="form2"> -->
      <h2>Project and plot information:</h2>
      <div class="Info">
        <div class="pInfo-1">
          <label
            >Project Name:
            <input type="text" placeholder="Enter Your Name" />
          </label>
          <label
            >Phase/Sector:
            <input type="text" placeholder="Enter the Name" />
          </label>
          <div class="house-info">
            <label
              >Street No:
              <input type="number" placeholder="Enter the Name" />
            </label>
            <label
              >Plot No:
              <input type="number" placeholder="Enter the Name" />
            </label>
          </div>
          <label
            >Booking Office:
            <input type="text" placeholder="Enter the Name" />
          </label>
        </div>
        <div class="pInfo-2">
          <label>Plot Status:</label>
          <div class="plot-status-2">
            <input type="checkbox" />
            <span>Resedental</span>
            <input type="checkbox" />
            <span>Commercial</span>
            <input type="checkbox" />
            <span>Form House</span>
          </div>
          <label>Plot Size:</label>
          <div class="plot-status-1">
            <input type="checkbox" />
            <span>05 Marla</span>
            <input type="checkbox" />
            <span>02 Marla </span>
            <input type="checkbox" />
            <span>02 Kanal</span>
            <input type="checkbox" />
            <span>07 Marla</span>
            <input type="checkbox" />
            <span>04 Marla </span>
            <input type="checkbox" />
            <span>04 Kanal</span>
            <input type="checkbox" />
            <span>10 Marla</span>
            <input type="checkbox" />
            <span>_______ </span>
            <input type="checkbox" />
            <span>08 Kanal</span>
            <input type="checkbox" />
            <span>20 Marla</span>
            <span></span>
            <input type="checkbox" />
            <span>_______ </span>
          </div>
        </div>
        <input type="submit"name="submit"value="Submit"id="plot-booking">
      </div>
    </form>

