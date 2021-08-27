import { Injectable } from '@angular/core';
import { NuevoI } from 'src/app/modelos/nuevo.interface';
import { ResponseI } from 'src/app/modelos/response.interface';
import { HttpClient , HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';
import { ClientesI } from 'src/app/modelos/clientes.interface';
import { PolizasI } from 'src/app/modelos/polizas.interface';
import { PolizaI } from 'src/app/modelos/poliza.interface';


@Injectable({
  providedIn: 'root'
})
export class ApiService {

  private clientesUrl = "http://localhost:8585/api/clientes";
  private polizasUrl = "http://localhost:8585/api/polizas";
  private singlePolizaUrl = "http://localhost:8585/api/polizas/";

  constructor(private http:HttpClient) { }

  getClientes():Observable<any>{
    return this.http.get(this.clientesUrl);
  }

  nuevaPoliza(form:NuevoI):Observable<ResponseI>{
    return this.http.post<ResponseI>(this.polizasUrl,form);
  }

  getPolizas():Observable<any>{
    return this.http.get(this.polizasUrl);
  }

  getSinglePoliza(id:any):Observable<any>{
    return this.http.get(this.singlePolizaUrl + id);
  }

  putPoliza(form:PolizaI,id:any):Observable<ResponseI>{
    return this.http.put<ResponseI>(this.singlePolizaUrl + id,form);
  }

}
