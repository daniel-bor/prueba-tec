import { Component, OnInit } from '@angular/core';
import { ApiService } from 'src/app/servicios/api/api.service';
import {  tap }  from 'rxjs/operators';
import { Router } from '@angular/router';
import { ClientesI } from 'src/app/modelos/clientes.interface';

@Component({
  selector: 'app-clientes',
  templateUrl: './clientes.component.html',
  styleUrls: ['./clientes.component.css']
})
export class ClientesComponent implements OnInit {

  clientes:ClientesI[]=[];

  constructor(private apiSvc:ApiService,private router:Router) { }

  ngOnInit(): void {
    this.apiSvc.getClientes().subscribe(data => {
      this.clientes = data.data;
    });    
  }

  volver(){
    this.router.navigate([
      'inicio'
    ]);
  }


  flag:boolean = false;
  cambiarFlag():any{
    let btn1 = document.getElementById("btn1");
    let btn2 = document.getElementById("btn2");
    btn1?.setAttribute("class","hidden");
    btn2?.setAttribute("class","hidden");
    window.print();
    btn1?.setAttribute("class","border border-gray-300 w-48 py-2 rounded text-2xl hover:bg-blue-300 hover:shadow-lg transition duration-500");
    btn2?.setAttribute("class","border border-gray-300 w-48 py-2 rounded text-2xl hover:bg-blue-300 hover:shadow-lg transition duration-500");
  }
}
