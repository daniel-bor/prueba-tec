import { Component, OnInit } from '@angular/core';
import { Router,ActivatedRoute } from '@angular/router';
import { PolizasI } from 'src/app/modelos/polizas.interface';
import { ApiService } from 'src/app/servicios/api/api.service';
import { FormGroup,FormControl,Validators } from '@angular/forms';
import { PolizaI } from 'src/app/modelos/poliza.interface';
import { ClientesI } from 'src/app/modelos/clientes.interface';

@Component({
  selector: 'app-editar',
  templateUrl: './editar.component.html',
  styleUrls: ['./editar.component.css']
})
export class EditarComponent implements OnInit {

  constructor(private router:Router,private activedRouter:ActivatedRoute, private api:ApiService) { }

  dataPoliza:PolizaI | undefined;
  dataClientes:ClientesI[]=[];
  poliza:PolizasI[]=[];
  polizaID = this.activedRouter.snapshot.paramMap.get('id');
  editarPoliza = new FormGroup({
     producto_id:new FormControl(''),
     cliente_id:new FormControl(''),
     fecha_inicio:new FormControl(''),
     fecha_fin:new FormControl(''),
     estado:new FormControl('')
  });

  ngOnInit(): void {
    let polizaId = this.activedRouter.snapshot.paramMap.get('id');

    this.api.getSinglePoliza(polizaId).subscribe(data=>{
       this.dataPoliza= data['poliza'];
       this.editarPoliza.setValue({
         'producto_id':this.dataPoliza?.producto_id,
         'cliente_id':this.dataPoliza?.cliente_id,
         'fecha_inicio':this.dataPoliza?.fecha_inicio,
         'fecha_fin':this.dataPoliza?.fecha_fin,
         'estado':this.dataPoliza?.estado
       })
       
    });

    this.api.getClientes().subscribe(data => {
      this.dataClientes = data.data;
    });  
  }

  volver(){
    this.router.navigate([
      'polizas'
    ]);
  }

  putForm(form:PolizaI){
    console.log(JSON.stringify(form));
    this.api.putPoliza(form,this.polizaID).subscribe(data =>{
      console.log(data);
      this.volver();
    })
  }
}
