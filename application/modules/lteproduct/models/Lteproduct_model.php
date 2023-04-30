<?php
class Lteproduct_model extends CI_Model
{
    public function get_laptop()
    {
        return $this->db->query("SELECT 
                                mst.id AS IDMASTER,mst.serial_number,mst.product_name,mst.brand,mst.type,mst.memory,mst.disk_type,mst.disk,mst.processor,mst.device_releases_years,mst.hostname,mst.username,mst.status_use,mst.status_available,mst.location_branch,mst.location_room,mst.cost_center,mst.po_no,mst.asset_no,mst.asset_of,mst.purchase_year,mst.purchase_batch,mst.prices,mst.remarks,mst.anydesk,mst.created_by,mst.created_date,mst.handover,
                                sale.id AS IDSALE,sale.id_device,sale.category,sale.product_cover,sale.product_images,sale.description,sale.status,sale.prices_normal,sale.discount,sale.port_date,sale.post_by
                                FROM tb_laptop_master AS mst
                                LEFT OUTER JOIN tb_product_ecommerce AS sale ON mst.id=sale.id_device AND sale.category='Laptop'
                                WHERE mst.status_available='DISPOSED'
                                ")->result_array();
    }
}
