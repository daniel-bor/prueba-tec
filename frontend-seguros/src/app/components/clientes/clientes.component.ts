import { Component, OnInit } from '@angular/core';
import { ApiService } from 'src/app/servicios/api/api.service';
import {  tap }  from 'rxjs/operators';

@Component({
  selector: 'app-clientes',
  templateUrl: './clientes.component.html',
  styleUrls: ['./clientes.component.css']
})
export class ClientesComponent implements OnInit {

  constructor(private apiSvc:ApiService) { }

  ngOnInit(): void {
    this.apiSvc.getClientes().pipe(tap(res=>console.log(res))).subscribe();
  }

}
