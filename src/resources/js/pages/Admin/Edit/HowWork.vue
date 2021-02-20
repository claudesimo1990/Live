<template>
    <div>
        <el-form  :model="inputs[0]" status-icon :rules="rules" ref="inputs" label-width="120px" class="demo-form-inline">
            <div class="border m-3 p-3" v-for="(input, index) in inputs" :key="index">
                <div class="d-flex justify-content-center justify-content-between mb-2">
                    <h4>Step {{ index + 1 }}</h4>
                    <el-row>
                        <el-button type="primary" icon="el-icon-circle-plus-outline" circle @click="add()"></el-button>
                        <el-button type="danger" icon="el-icon-delete" circle @click="remove(index)"></el-button>
                    </el-row>
                </div>
                <el-form-item label="title" :prop="title">
                    <el-input type="text" v-model="input.title"></el-input>
                </el-form-item>

                <el-form-item label="body" :prop="text">
                    <el-input type="text" v-model="input.text"></el-input>
                </el-form-item>
            </div>
            <el-form-item>
                <el-button type="success" @click="addHowItWork()">Save</el-button>
            </el-form-item>
        </el-form>
    </div>
</template>
<script>
export default {
props: ['steps'],
data () {
    return {
        title: '',
        text: '',
        inputs: [{
            id: null,
            title: '',
            text: ''
        }],
        rules: {
            title: [{ required: true, message: 'champs requis!', trigger: 'blur' },],
            text: [{ required: true, message: 'champs requis', trigger: 'blur' },]
        }
    }
  },

  methods: {
    add () {
      this.inputs.push({
        id: null,
        title: '',
        text: ''
      })
      console.log(this.inputs)
    },

    remove (index) {
      this.inputs.splice(index, 1)
    },

    addHowItWork ()
    {
        this.$inertia.post('/admin/steps/create', this.inputs).then(() => {})
    }
  },
  mounted() {
    if (this.steps.length > 0) {
        this.inputs = this.steps;
    }
  }
}
</script>
