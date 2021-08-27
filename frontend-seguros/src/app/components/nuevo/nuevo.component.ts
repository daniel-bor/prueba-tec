import { Component, OnInit } from '@angular/core';
import { FormGroup,FormControl,Validators } from '@angular/forms';
import { ApiService } from 'src/app/servicios/api/api.service';
import { NuevoI } from 'src/app/modelos/nuevo.interface';


@Component({
  selector: 'app-nuevo',
  templateUrl: './nuevo.component.html',
  styleUrls: ['./nuevo.component.css']
})
export class NuevoComponent implements OnInit {

  nuevoForm = new FormGroup({
    cliente:new FormControl('',Validators.required),
    producto:new FormControl('',Validators.required),
    fechaInicio:new FormControl('',Validators.required),
    fechaFinal:new FormControl('',Validators.required),
    estado:new FormControl('',Validators.required)
  });

  constructor(private api:ApiService) { }

  ngOnInit(): void {
  }

  onNuevo(form: NuevoI){
    this.api.nuevaPoliza(form).subscribe(data =>{
      console.log(data);
    });
  }
}
