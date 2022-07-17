<template>
  <div class="container-fluid">
    <div class="row mt-5">
      <div class="col-md-12">
        <p class="h2 text-center fw-lighter">Encurtador de Url</p>
        <p class="text-center">Nota: <strong> Coloque um link no campo e gere um link mais curto e agradavel de se ver!</strong></p>
      </div>
      <hr />
      <div class="col-md-4 p-3 offset-md-3">
        
        <label>Digite uma Url:</label>
        <input
          type="url"
          placeholder="Digite um link"
          class="form-control"
          v-model="url"
        />
        <button class="mt-5 btn btn-outline-primary" @click="GeraLink">
          Gerar Link
        </button>
      </div>

      <div class="mt-4 col-md-4 offset-md-3">
        <p class = "h4 text-center text-success">{{txt}}</p>
        <p class = "h4 text-center text-danger">{{erro}}</p>
        <p class="h4 text-center text-success">
          <a target="_blank" :href="link">{{ link }}</a>
        </p>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "RootExample",
  data() {
    return {
      url: "",
      link: "",
      txt: "",
      erro: ""
    };
  },
  watch:{
        url(){
            if(this.url.length == 0){
                this.link = "";
                this.txt = "";
            }
        }
  },
  methods: {
    
    GeraLink() {
        this.txt = "";
        if(this.url.length == 0){
            alert("Digite uma url!");
            return
        }
        this.txt = "Aguarde...";
      axios
        .post(
          "https://api-ssl.bitly.com/v4/shorten",
          {
            domain: "bit.ly",
            long_url: this.url,
          },
          {
            headers: {
              Authorization: "Bearer 0dc2c41c93e8793719a64699753088001367686a",
            },
          }
        )
        .then((response) => {
              this.txt = ''
          this.link = response.data.link;
        })
        .catch((error) => {
            this.txt = ""
          alert("Erro ao gerar o link, tente novamente");
            this.erro = "Erro ao gerar o seu link, Link quebrado!";
        });
    },
  },
};
</script>