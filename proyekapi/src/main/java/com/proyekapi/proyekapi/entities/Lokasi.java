package com.proyekapi.proyekapi.entities;

import jakarta.persistence.*;
import lombok.Getter;
import lombok.Setter;
import lombok.NoArgsConstructor;
import java.time.LocalDateTime;

@Entity
@Table(name = "lokasi")
@Getter
@Setter
@NoArgsConstructor
public class Lokasi {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Integer id;

    private String namaLokasi;
    private String negara;
    private String provinsi;
    private String kota;

    @Column(updatable = false)
    private LocalDateTime createdAt;

    @PrePersist
    public void prePersist() {
        this.createdAt = LocalDateTime.now();
    }

    public String getNamaLokasi() {
        return namaLokasi;
      }
      
      public String getNegara() {
        return negara;
      }
      
      public String getProvinsi() {
        return provinsi;
      }
      
      public String getKota() {
        return kota;
      }
}
