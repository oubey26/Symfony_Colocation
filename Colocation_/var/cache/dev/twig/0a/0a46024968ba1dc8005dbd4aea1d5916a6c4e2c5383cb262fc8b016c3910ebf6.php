<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_860daf5ffd2d36ad9e7861393ae1c729dc6a08099b7d540a9ebc6df51542f959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd05fce31359fcf6e54d31575603cdf718b13bece8e1bae90e1ea5881f0ac905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd05fce31359fcf6e54d31575603cdf718b13bece8e1bae90e1ea5881f0ac905->enter($__internal_bd05fce31359fcf6e54d31575603cdf718b13bece8e1bae90e1ea5881f0ac905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_f90723553e7a275d9f1005f5fe744a5dfa2823e885bac574c36d1c6e8a71a080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90723553e7a275d9f1005f5fe744a5dfa2823e885bac574c36d1c6e8a71a080->enter($__internal_f90723553e7a275d9f1005f5fe744a5dfa2823e885bac574c36d1c6e8a71a080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bd05fce31359fcf6e54d31575603cdf718b13bece8e1bae90e1ea5881f0ac905->leave($__internal_bd05fce31359fcf6e54d31575603cdf718b13bece8e1bae90e1ea5881f0ac905_prof);

        
        $__internal_f90723553e7a275d9f1005f5fe744a5dfa2823e885bac574c36d1c6e8a71a080->leave($__internal_f90723553e7a275d9f1005f5fe744a5dfa2823e885bac574c36d1c6e8a71a080_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_87df488198878bd2f62da92861ab84b35ea9f8e759afda70c20834349ecd34dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87df488198878bd2f62da92861ab84b35ea9f8e759afda70c20834349ecd34dd->enter($__internal_87df488198878bd2f62da92861ab84b35ea9f8e759afda70c20834349ecd34dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_237b8b041d9bf317ee2d1851600a023ddfe6f9d646294b276c36212c1512d1ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237b8b041d9bf317ee2d1851600a023ddfe6f9d646294b276c36212c1512d1ed->enter($__internal_237b8b041d9bf317ee2d1851600a023ddfe6f9d646294b276c36212c1512d1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_237b8b041d9bf317ee2d1851600a023ddfe6f9d646294b276c36212c1512d1ed->leave($__internal_237b8b041d9bf317ee2d1851600a023ddfe6f9d646294b276c36212c1512d1ed_prof);

        
        $__internal_87df488198878bd2f62da92861ab84b35ea9f8e759afda70c20834349ecd34dd->leave($__internal_87df488198878bd2f62da92861ab84b35ea9f8e759afda70c20834349ecd34dd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
