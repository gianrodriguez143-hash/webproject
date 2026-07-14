 <a href="login.php" class="primary-btn">Back</a>
    
    <form action="register_handler.php" method="POST">

        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input
                type="text"
                class="form-control"
                name="full_name"
                required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input
                type="email"
                class="form-control"
                name="email"
                required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input
                type="password"
                class="form-control"
                name="password"
                required>
        </div>

        <button type="submit" class="btn btn-primary">
            Register
        </button>

    </form>