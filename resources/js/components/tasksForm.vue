<template>
    <form
        action=""
        method="POST"
        enctype="multipart/form-data"
        class="form-horizontal"
    >
        <div class="card-body">
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="name">Task Name</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        placeholder="Name"
                        v-model="title"
                    />
                </div>
                <div class="col-sm-10">
                    <label for="name">Description</label>
                    <input
                        type="text"
                        name="description"
                        class="form-control"
                        placeholder="Description"
                        v-model="description"
                    />
                </div>
            </div>
        </div>

        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save Task</button>
        </div>
        <!-- /.card-footer -->
    </form>
</template>

<script>
export default {
    props: ["mode"],
    data() {
        return {
            title: "",
            description: ""
        };
    }
};
</script>
