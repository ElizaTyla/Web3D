<component library='EngineNodePool' name='Engine' standard='' title='Engine Component' providerUrl='http://www.instantreality.org/' level='0'>
 <node name='ClientJob'/>
 <node name='ClusterWindow'/>
 <node name='CollisionJob'/>
 <node name='ColorBufferViewport'/>
 <node name='ColorDisplayFilter'/>
 <node name='CombinerJob'/>
 <node name='DeviceHandler'/>
 <node name='DisplayFilter'/>
 <node name='DistortionDisplayFilter'/>
 <node name='Engine'/>
 <node name='EngineBaseNode'/>
 <node name='ExternalInterfaceJob'/>
 <node name='InteractionJob'/>
 <node name='Job'/>
 <node name='LocalWindow'/>
 <node name='MatrixViewModifier'/>
 <node name='MultiDisplayClusterWindow'/>
 <node name='Navigator2D'/>
 <node name='PassiveViewarea'/>
 <node name='PassiveWindow'/>
 <node name='ProjectionViewModifier'/>
 <node name='RenderJob'/>
 <node name='ResolutionDisplayFilter'/>
 <node name='ShadowViewarea'/>
 <node name='ShearedStereoViewModifier'/>
 <node name='SortFirstClusterWindow'/>
 <node name='SortLastClusterWindow'/>
 <node name='SoundJob'/>
 <node name='StandardViewarea'/>
 <node name='StereoBufferViewport'/>
 <node name='StereoViewModifier'/>
 <node name='StreamViewarea'/>
 <node name='SynchronizeJob'/>
 <node name='TileViewModifier'/>
 <node name='TiledClusterWindow'/>
 <node name='TimerJob'/>
 <node name='ViewModifier'/>
 <node name='Viewarea'/>
 <node name='WebInterfaceJob'/>
 <node name='WebServiceJob'/>
 <node name='Window'/>
 <node name='WindowGroup'/>
<![CDATA[: This component provides an enginegraph. The engine is completely separated from the scenegraph. For this reason it’s well-suited for scene-independet configurations (like clustering) and passes to be performed per frame, not per node. The device backends implemented in HID (Human interface devices) can be accessed/connected via the engine graph and easily used in the scene.]]>
</component>
