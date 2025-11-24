<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Frontend - Website')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/6cbdf8a9b4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">
    @stack('styles')
</head>

<body>
    @include('frontend.layouts.header')
    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>
    @include('frontend.layouts.footer')

    <div class="modal fade" id="bookModal" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ route('booking.store') }}" method="POST" id="bookingForm">
                    @csrf
                    <input type="hidden" name="type" id="bookingType">
                    <input type="hidden" name="staff_member" id="bookingStaff">
                    <input type="hidden" name="date" id="bookingDate">
                    <input type="hidden" name="time" id="bookingTime">
                    <input type="hidden" name="name" id="bookingName">
                    <input type="hidden" name="email" id="bookingEmail">
                    <input type="hidden" name="phone" id="bookingPhone">
                    <input type="hidden" name="company_name" id="bookingCompany">

                    <div class="modal-header">
                        <h5 class="modal-title" id="bookModalLabel">Book a visit/call</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Step 1: Choose Visit or Call -->
                    <div class="modal-step" id="step1">
                        <div class="modal-body">
                            <p class="text-muted mb-4">Choose what you would like to do</p>
                            <div class="d-flex flex-column gap-3">
                                <button type="button"
                                    class="btn btn-outline-primary btn-lg text-start p-4 d-flex align-items-center justify-content-between"
                                    onclick="setBookingType('visit'); showStep(2, 'visit')">
                                    <div>
                                        <h6 class="mb-1">Book a visit</h6>
                                        <p class="small text-muted mb-0">Schedule a visit to our showroom</p>
                                    </div>
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-outline-primary btn-lg text-start p-4 d-flex align-items-center justify-content-between"
                                    onclick="setBookingType('call'); showStep(2, 'call')">
                                    <div>
                                        <h6 class="mb-1">Book a call</h6>
                                        <p class="small text-muted mb-0">Schedule a call with our team</p>
                                    </div>
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2: Select a Person (Visit) -->
                    <div class="modal-step d-none" id="step2-visit">
                        <div class="modal-body">
                            <div class="d-flex align-items-center mb-4">
                                <button type="button" class="btn-back me-3" onclick="showStep(1)">
                                    <i class="fas fa-arrow-left"></i>
                                </button>
                                <h6 class="modal-step-title mb-0">Select a person</h6>
                            </div>

                            <div class="person-card mb-3 p-3 border rounded d-flex align-items-center"
                                onclick="selectPerson(this, 'John Doe')">
                                <div class="person-avatar me-3"><i class="fas fa-user"></i></div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">John Doe</h6>
                                    <p class="small text-muted mb-0">Sales Executive</p>
                                </div>
                                <i class="fas fa-check-circle text-primary" style="display:none"></i>
                                <i class="far fa-circle"></i>
                            </div>

                            <div class="person-card mb-3 p-3 border rounded d-flex align-items-center"
                                onclick="selectPerson(this, 'Mike Shake')">
                                <div class="person-avatar me-3"><i class="fas fa-user"></i></div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Mike Shake</h6>
                                    <p class="small text-muted mb-0">Sales Manager</p>
                                </div>
                                <i class="fas fa-check-circle text-primary" style="display:none"></i>
                                <i class="far fa-circle"></i>
                            </div>

                            <button type="button" class="btn btn-primary w-100 mt-3" onclick="showStep(3, 'visit')">Confirm meeting</button>
                        </div>
                    </div>

                    <!-- Step 2: Select a Person (Call) -->
                    <div class="modal-step d-none" id="step2-call">
                        <div class="modal-body">
                            <div class="d-flex align-items-center mb-4">
                                <button type="button" class="btn-back me-3" onclick="showStep(1)">
                                    <i class="fas fa-arrow-left"></i>
                                </button>
                                <h6 class="modal-step-title mb-0">Select a person</h6>
                            </div>

                            <div class="person-card mb-3 p-3 border rounded d-flex align-items-center"
                                onclick="selectPerson(this, 'John Doe')">
                                <div class="person-avatar me-3"><i class="fas fa-user"></i></div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">John Doe</h6>
                                    <p class="small text-muted mb-0">Sales Executive</p>
                                </div>
                                <i class="fas fa-check-circle text-primary" style="display:none"></i>
                                <i class="far fa-circle"></i>
                            </div>

                            <div class="person-card mb-3 p-3 border rounded d-flex align-items-center"
                                onclick="selectPerson(this, 'Mike Shake')">
                                <div class="person-avatar me-3"><i class="fas fa-user"></i></div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Mike Shake</h6>
                                    <p class="small text-muted mb-0">Sales Manager</p>
                                </div>
                                <i class="fas fa-check-circle text-primary" style="display:none"></i>
                                <i class="far fa-circle"></i>
                            </div>

                            <button type="button" class="btn btn-primary w-100 mt-3" onclick="showStep(3, 'call')">Next</button>
                        </div>
                    </div>

                    <!-- Step 3: Enter Details (Visit) -->
                    <div class="modal-step d-none" id="step3-visit">
                        <div class="modal-body">
                            <div class="d-flex align-items-center mb-4">
                                <button type="button" class="btn-back me-3" onclick="showStep(2, 'visit')">
                                    <i class="fas fa-arrow-left"></i>
                                </button>
                                <h6 class="modal-step-title mb-0">Enter your details</h6>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small text-muted">Full name</label>
                                <input type="text" class="form-control" placeholder="Enter your full name" oninput="updateHidden('bookingName', this.value)" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label small text-muted">Email address</label>
                                <input type="email" class="form-control" placeholder="Enter your email" oninput="updateHidden('bookingEmail', this.value)" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label small text-muted">Company name</label>
                                <input type="text" class="form-control" placeholder="Enter company name" oninput="updateHidden('bookingCompany', this.value)" />
                            </div>

                            <button type="button" class="btn btn-primary w-100" onclick="showStep(4, 'visit')">Next</button>
                        </div>
                    </div>

                    <!-- Step 3: Select Date & Time (Call) -->
                    <div class="modal-step d-none" id="step3-call">
                        <div class="modal-body">
                            <div class="d-flex align-items-center mb-4">
                                <button type="button" class="btn-back me-3" onclick="showStep(2, 'call')">
                                    <i class="fas fa-arrow-left"></i>
                                </button>
                                <h6 class="modal-step-title mb-0">Select date & time</h6>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small text-muted">Select date</label>
                                <input type="date" class="form-control" onchange="updateHidden('bookingDate', this.value)" />
                            </div>
                            <div class="mb-4">
                                <label class="form-label small text-muted">Select time</label>
                                <select class="form-select" onchange="updateHidden('bookingTime', this.value)">
                                    <option value="">Select Time</option>
                                    <option>09:00 AM</option>
                                    <option>10:00 AM</option>
                                    <option>11:00 AM</option>
                                    <option>01:00 PM</option>
                                    <option>02:00 PM</option>
                                    <option>03:00 PM</option>
                                </select>
                            </div>

                            <button type="button" class="btn btn-primary w-100" onclick="showStep(4, 'call')">Next</button>
                        </div>
                    </div>

                    <!-- Step 4: Select Date & Time (Visit) -->
                    <div class="modal-step d-none" id="step4-visit">
                        <div class="modal-body">
                            <div class="d-flex align-items-center mb-4">
                                <button type="button" class="btn-back me-3" onclick="showStep(3, 'visit')">
                                    <i class="fas fa-arrow-left"></i>
                                </button>
                                <h6 class="modal-step-title mb-0">Select date & time</h6>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small text-muted">Select date</label>
                                <input type="date" class="form-control" onchange="updateHidden('bookingDate', this.value)" />
                            </div>
                            <div class="mb-4">
                                <label class="form-label small text-muted">Select time</label>
                                <select class="form-select" onchange="updateHidden('bookingTime', this.value)">
                                    <option value="">Select Time</option>
                                    <option>09:00 AM</option>
                                    <option>10:00 AM</option>
                                    <option>11:00 AM</option>
                                    <option>01:00 PM</option>
                                    <option>02:00 PM</option>
                                    <option>03:00 PM</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Book visit</button>
                        </div>
                    </div>

                    <!-- Step 4: Enter Details (Call) -->
                    <div class="modal-step d-none" id="step4-call">
                        <div class="modal-body">
                            <div class="d-flex align-items-center mb-4">
                                <button type="button" class="btn-back me-3" onclick="showStep(3, 'call')">
                                    <i class="fas fa-arrow-left"></i>
                                </button>
                                <h6 class="modal-step-title mb-0">Enter your details</h6>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small text-muted">Full name</label>
                                <input type="text" class="form-control" placeholder="Enter your full name" oninput="updateHidden('bookingName', this.value)" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label small text-muted">Email address</label>
                                <input type="email" class="form-control" placeholder="Enter your email" oninput="updateHidden('bookingEmail', this.value)" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label small text-muted">Phone number</label>
                                <input type="tel" class="form-control" placeholder="Enter your phone number" oninput="updateHidden('bookingPhone', this.value)" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label small text-muted">Company name</label>
                                <input type="text" class="form-control" placeholder="Enter company name" oninput="updateHidden('bookingCompany', this.value)" />
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Book call</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        // Initialize modal
        let bookModal = null;
        let selectedPerson = null;

        // Wait for DOM to be fully loaded
        document.addEventListener("DOMContentLoaded", function() {
            // Initialize modal
            bookModal = new bootstrap.Modal(document.getElementById("bookModal"));

            // Add click event to the book button
            document
                .querySelector(".btn-book")
                .addEventListener("click", function() {
                    showStep(1);
                    bookModal.show();
                });

            // Set minimum date to today for date inputs
            const today = new Date().toISOString().split("T")[0];
            document.querySelectorAll('input[type="date"]').forEach((input) => {
                input.min = today;
            });
        });

        function setBookingType(type) {
            document.getElementById('bookingType').value = type;
        }

        function updateHidden(id, value) {
            document.getElementById(id).value = value;
        }

        // Show specific step in the modal
        function showStep(step, type = "") {
            // Hide all steps first
            document.querySelectorAll(".modal-step").forEach((el) => {
                el.classList.add("d-none");
            });

            // Show the selected step
            const stepId = type ? `step${step}-${type}` : `step${step}`;
            const stepElement = document.getElementById(stepId);
            if (stepElement) {
                stepElement.classList.remove("d-none");
            }

            // If it's the first step, reset the form
            if (step === 1) {
                resetForm();
            }

            // Scroll to top of modal when step changes
            const modalContent = document.querySelector(".modal-content");
            if (modalContent) {
                modalContent.scrollTop = 0;
            }
        }

        // Select a person
        function selectPerson(element, name) {
            // Remove selected class from all person cards
            document.querySelectorAll(".person-card").forEach((card) => {
                card.classList.remove("selected");
            });

            // Add selected class to clicked card
            element.classList.add("selected");
            selectedPerson = name;
            document.getElementById('bookingStaff').value = name;

            // Update the checkmark icons
            const checkIcons = element.parentElement.querySelectorAll(
                ".fa-check-circle, .fa-circle"
            );
            checkIcons.forEach((icon) => {
                if (icon.classList.contains("fa-check-circle")) {
                    icon.style.display = "block";
                } else {
                    icon.style.display = "none";
                }
            });
        }

        // Reset form
        function resetForm() {
            selectedPerson = null;
            document.getElementById('bookingForm').reset();
            document.querySelectorAll(".person-card").forEach((card) => {
                card.classList.remove("selected");
                const checkIcons = card.querySelectorAll(
                    ".fa-check-circle, .fa-circle"
                );
                checkIcons.forEach((icon) => {
                    if (icon.classList.contains("fa-check-circle")) {
                        icon.style.display = "none";
                    } else {
                        icon.style.display = "block";
                    }
                });
            });
        }

        // Function to open reschedule modal
        function openRescheduleModal() {
            // First close any open modals
            const existingModal = document.getElementById("rescheduleModal");
            if (existingModal) {
                const modal = bootstrap.Modal.getInstance(existingModal);
                if (modal) modal.hide();
                existingModal.remove();
            }

            // Create and append the modal
            const modalHTML = `
      <div class="modal fade" id="rescheduleModal" tabindex="-1" aria-labelledby="rescheduleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="rescheduleModalLabel">Reschedule Appointment</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-4">
                <p class="mb-2"><strong>Current Appointment:</strong></p>
                <p class="text-muted">[Current Date] at [Current Time] with [Staff Name]</p>
              </div>

              <div class="mb-3">
                <label class="form-label">Select New Date</label>
                <input type="date" class="form-control" id="rescheduleDate">
              </div>

              <div class="mb-4">
                <label class="form-label">Select New Time</label>
                <select class="form-select" id="rescheduleTime">
                  <option value="">Choose a time</option>
                  <option>09:00 AM</option>
                  <option>10:00 AM</option>
                  <option>11:00 AM</option>
                  <option>01:00 PM</option>
                  <option>02:00 PM</option>
                  <option>03:00 PM</option>
                  <option>04:00 PM</option>
                </select>
              </div>

              <div class="mb-3">
                <label class="form-label">Reason for Rescheduling (Optional)</label>
                <textarea class="form-control" rows="3" placeholder="Please let us know why you're rescheduling"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary" onclick="submitReschedule()">Confirm Reschedule</button>
            </div>
          </div>
        </div>
      </div>`;

            // Add modal to body
            document.body.insertAdjacentHTML("beforeend", modalHTML);

            // Initialize and show the modal
            const modalElement = document.getElementById("rescheduleModal");
            const modal = new bootstrap.Modal(modalElement);
            modal.show();

            // Set minimum date to today
            const today = new Date().toISOString().split("T")[0];
            document.getElementById("rescheduleDate").min = today;
        }

        // Function to handle reschedule submission
        function submitReschedule() {
            const date = document.getElementById("rescheduleDate").value;
            const time = document.getElementById("rescheduleTime").value;

            if (!date || !time) {
                alert("Please select both date and time");
                return;
            }

            // Here you would typically send this data to your server
            console.log("Rescheduling to:", date, time);

            // Show success message
            alert("Your appointment has been rescheduled successfully!");

            // Close the modal
            const modal = bootstrap.Modal.getInstance(
                document.getElementById("rescheduleModal")
            );
            if (modal) modal.hide();
        }

        // Function to open cancel confirmation modal
        function openCancelModal() {
            // First close any open modals
            const existingModal = document.getElementById("cancelModal");
            if (existingModal) {
                const modal = bootstrap.Modal.getInstance(existingModal);
                if (modal) modal.hide();
                existingModal.remove();
            }

            // Create and append the modal
            const modalHTML = `
      <div class="modal fade" id="cancelModal" tabindex="-1" aria-labelledby="cancelModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="cancelModalLabel">Cancel Appointment</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <div class="mb-4">
                <div class="cancel-icon mb-3">
                  <i class="fas fa-times-circle"></i>
                </div>
                <h5>Are you sure you want to cancel this appointment?</h5>
                <p class="text-muted">This action cannot be undone. Your appointment will be permanently removed from our schedule.</p>
              </div>

              <div class="mb-3">
                <label class="form-label">Reason for cancellation (Optional)</label>
                <select class="form-select mb-3" id="cancelReason">
                  <option value="">Select a reason</option>
                  <option>I've rescheduled with someone else</option>
                  <option>I no longer need this service</option>
                  <option>I found another provider</option>
                  <option>Other</option>
                </select>

                <div id="otherReasonContainer" style="display: none;">
                  <label class="form-label">Please specify</label>
                  <textarea class="form-control" rows="2" placeholder="Please provide more details"></textarea>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Go Back</button>
              <button type="button" class="btn btn-danger" onclick="confirmCancellation()">Yes, Cancel Appointment</button>
            </div>
          </div>
        </div>
      </div>`;

            // Add modal to body
            document.body.insertAdjacentHTML("beforeend", modalHTML);

            // Initialize and show the modal
            const modalElement = document.getElementById("cancelModal");
            const modal = new bootstrap.Modal(modalElement);
            modal.show();

            // Show/hide other reason field
            const reasonSelect = modalElement.querySelector("#cancelReason");
            const otherReasonContainer = modalElement.querySelector(
                "#otherReasonContainer"
            );

            reasonSelect.addEventListener("change", function() {
                otherReasonContainer.style.display =
                    this.value === "Other" ? "block" : "none";
            });
        }

        // Function to handle cancellation confirmation
        function confirmCancellation() {
            // Here you would typically send cancellation to your server
            console.log("Cancelling appointment...");

            // Show success message
            alert("Your appointment has been cancelled successfully.");

            // Close the modal
            const modal = bootstrap.Modal.getInstance(
                document.getElementById("cancelModal")
            );
            if (modal) modal.hide();

            // Optionally, redirect or refresh the page
            // window.location.reload();
        }
    </script>
    <script src="{{ asset('frontend_assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>
