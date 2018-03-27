<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_95da43852d326f36b8d7a079d95c5638967aac7d0aa558eba17a39527a0ba587 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f4d9b0d804a53f116b4269da1450194fa864900ab6c15b97e8cdd4d9b6120da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f4d9b0d804a53f116b4269da1450194fa864900ab6c15b97e8cdd4d9b6120da->enter($__internal_7f4d9b0d804a53f116b4269da1450194fa864900ab6c15b97e8cdd4d9b6120da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_dbbefb001c464d5c346f09dff0f16b56c5b7947436ae8b9e24a436d971bfa801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbbefb001c464d5c346f09dff0f16b56c5b7947436ae8b9e24a436d971bfa801->enter($__internal_dbbefb001c464d5c346f09dff0f16b56c5b7947436ae8b9e24a436d971bfa801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f4d9b0d804a53f116b4269da1450194fa864900ab6c15b97e8cdd4d9b6120da->leave($__internal_7f4d9b0d804a53f116b4269da1450194fa864900ab6c15b97e8cdd4d9b6120da_prof);

        
        $__internal_dbbefb001c464d5c346f09dff0f16b56c5b7947436ae8b9e24a436d971bfa801->leave($__internal_dbbefb001c464d5c346f09dff0f16b56c5b7947436ae8b9e24a436d971bfa801_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db993e3c3ed5d3ae05721376a68d90a3d425ff11c4ba44f3b8e6d81a1cf33e57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db993e3c3ed5d3ae05721376a68d90a3d425ff11c4ba44f3b8e6d81a1cf33e57->enter($__internal_db993e3c3ed5d3ae05721376a68d90a3d425ff11c4ba44f3b8e6d81a1cf33e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cb0fa5a7a06bbdb798918989aec61b250834d58e3e6c74a7949ff3accb9e920a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0fa5a7a06bbdb798918989aec61b250834d58e3e6c74a7949ff3accb9e920a->enter($__internal_cb0fa5a7a06bbdb798918989aec61b250834d58e3e6c74a7949ff3accb9e920a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_cb0fa5a7a06bbdb798918989aec61b250834d58e3e6c74a7949ff3accb9e920a->leave($__internal_cb0fa5a7a06bbdb798918989aec61b250834d58e3e6c74a7949ff3accb9e920a_prof);

        
        $__internal_db993e3c3ed5d3ae05721376a68d90a3d425ff11c4ba44f3b8e6d81a1cf33e57->leave($__internal_db993e3c3ed5d3ae05721376a68d90a3d425ff11c4ba44f3b8e6d81a1cf33e57_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
