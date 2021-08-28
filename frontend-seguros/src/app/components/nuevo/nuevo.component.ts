import { Component, OnInit } from '@angular/core';
import { FormGroup,FormControl,Validators } from '@angular/forms';
import { ApiService } from 'src/app/servicios/api/api.service';
import { NuevoI } from 'src/app/modelos/nuevo.interface';
import { ClientesI } from 'src/app/modelos/clientes.interface';
import { Router,ActivatedRoute } from '@angular/router';
@Component({
  selector: 'app-nuevo',
  templateUrl: './nuevo.component.html',
  styleUrls: ['./nuevo.component.css']
})
export class NuevoComponent implements OnInit {

  nuevaPoliza = new FormGroup({
     producto_id:new FormControl(''),
     cliente_id:new FormControl(''),
     fecha_inicio:new FormControl(''),
     fecha_fin:new FormControl(''),
     estado:new FormControl('')
  });

  constructor(private router:Router,private activedRouter:ActivatedRoute, private api:ApiService) { }

  dataClientes:ClientesI[]=[];

  ngOnInit(): void {

    this.api.getClientes().subscribe(data => {
      this.dataClientes = data.data;
    });  
  }
  volver(){
    this.router.navigate([
      'polizas'
    ]);
  }

  postForm(form: NuevoI){
    this.api.postPoliza(form).subscribe(data=>{
      console.log(data);
      this.volver();
    })
  }
}
