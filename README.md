#Currency

Con questo modulo le posizioni delle valute sono gestibili da di.xml come segue:

```xml
<type name="DNAFactory\Currency\Config\Currency">
    <arguments>
        <argument name="currenciesPositions" xsi:type="array">
            <item name="EUR" xsi:type="const">\Magento\Framework\Currency::RIGHT</item>
            <item name="USD" xsi:type="const">\Magento\Framework\Currency::LEFT</item>
        </argument>
    </arguments>
</type>
```

Esiste la configurazione dnafactory/currency/position che determina una posizione di default per tutte le currency non definite in di