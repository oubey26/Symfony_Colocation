<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_e770f17a8d60e4ce30c304de98c9a856e76d53dd60b35507e71b476db3246c61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_65bdb09000f4e098845d00f6c51ec87cbe9c077919544686744a33a7dd55dcaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65bdb09000f4e098845d00f6c51ec87cbe9c077919544686744a33a7dd55dcaa->enter($__internal_65bdb09000f4e098845d00f6c51ec87cbe9c077919544686744a33a7dd55dcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_985716d36afc7dd560619931c464f3ac48ce18a1b57bfcd96dc9f28c790f79e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985716d36afc7dd560619931c464f3ac48ce18a1b57bfcd96dc9f28c790f79e0->enter($__internal_985716d36afc7dd560619931c464f3ac48ce18a1b57bfcd96dc9f28c790f79e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65bdb09000f4e098845d00f6c51ec87cbe9c077919544686744a33a7dd55dcaa->leave($__internal_65bdb09000f4e098845d00f6c51ec87cbe9c077919544686744a33a7dd55dcaa_prof);

        
        $__internal_985716d36afc7dd560619931c464f3ac48ce18a1b57bfcd96dc9f28c790f79e0->leave($__internal_985716d36afc7dd560619931c464f3ac48ce18a1b57bfcd96dc9f28c790f79e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80b171f774fc4d50e931d589530ccd1e8752f41963ce0cef583008fe9e2fe522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b171f774fc4d50e931d589530ccd1e8752f41963ce0cef583008fe9e2fe522->enter($__internal_80b171f774fc4d50e931d589530ccd1e8752f41963ce0cef583008fe9e2fe522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_68114e2718ec09fa89195664028f15c992fff6d12f5eccda9bec1fd730bcf1fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68114e2718ec09fa89195664028f15c992fff6d12f5eccda9bec1fd730bcf1fc->enter($__internal_68114e2718ec09fa89195664028f15c992fff6d12f5eccda9bec1fd730bcf1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_68114e2718ec09fa89195664028f15c992fff6d12f5eccda9bec1fd730bcf1fc->leave($__internal_68114e2718ec09fa89195664028f15c992fff6d12f5eccda9bec1fd730bcf1fc_prof);

        
        $__internal_80b171f774fc4d50e931d589530ccd1e8752f41963ce0cef583008fe9e2fe522->leave($__internal_80b171f774fc4d50e931d589530ccd1e8752f41963ce0cef583008fe9e2fe522_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
