import { Injectable } from '@angular/core';
import { NuevoI } from 'src/app/modelos/nuevo.interface';
import { ResponseI } from 'src/app/modelos/response.interface';
import { HttpClient , HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Clientes } from 'src/app/modelos/clientes.interface';

@Injectable({
  providedIn: 'root'
})
export class ApiService {

  private clientesUrl = "http://localhost:8585/api/clientes";
  private polizasUrl = "http://localhost:8585/api/polizas";


  constructor(private http:HttpClient) { }

  getClientes():Observable<any>{
    return this.http.get<Clientes[]>(this.clientesUrl);
  }

  nuevaPoliza(form:NuevoI):Observable<ResponseI>{
    return this.http.post<ResponseI>(this.polizasUrl,form);
  }

}
