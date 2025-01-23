<div class="container rounded bg-white">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center  py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold">{{ $name }}</span>
                <span class="text-black-50">{{ $email }}</span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <form class="py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Name</label>
                        <input type="text" class="form-control" placeholder="Enter new name" wire:model="name">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Username</label>
                        <input type="text" class="form-control" placeholder="Enter new username" wire:model="username">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Password</label>
                        <input type="text" class="form-control" placeholder="Enter new password" value="">
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" type="button">Edit Profile</button>
                </div>
            </form>
        </div>
    </div>
</div>