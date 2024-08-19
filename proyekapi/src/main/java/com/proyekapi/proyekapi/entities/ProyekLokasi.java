package com.proyekapi.proyekapi.entities;

import jakarta.persistence.*;
import lombok.Data;
import lombok.NoArgsConstructor;

@Entity
@Table(name = "proyek_lokasi")
@Data
@NoArgsConstructor
public class ProyekLokasi {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Integer id;

    @ManyToOne
    @JoinColumn(name = "proyek_id")
    private Proyek proyek;

    @ManyToOne
    @JoinColumn(name = "lokasi_id")
    private Lokasi lokasi;
}
