<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_ba5c7259beab72cf1b1e35714ad5b901714d415f8a2d00809456bfc85fd4108c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_1f222ff4617a6934dca2b625bfef744aebd0af72be9606696399afee1b6e21b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f222ff4617a6934dca2b625bfef744aebd0af72be9606696399afee1b6e21b1->enter($__internal_1f222ff4617a6934dca2b625bfef744aebd0af72be9606696399afee1b6e21b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_9025fdd0e2f6cfce90dfe2aafab5e5f82ae32073a903248c7a8bf1e831962fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9025fdd0e2f6cfce90dfe2aafab5e5f82ae32073a903248c7a8bf1e831962fdc->enter($__internal_9025fdd0e2f6cfce90dfe2aafab5e5f82ae32073a903248c7a8bf1e831962fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f222ff4617a6934dca2b625bfef744aebd0af72be9606696399afee1b6e21b1->leave($__internal_1f222ff4617a6934dca2b625bfef744aebd0af72be9606696399afee1b6e21b1_prof);

        
        $__internal_9025fdd0e2f6cfce90dfe2aafab5e5f82ae32073a903248c7a8bf1e831962fdc->leave($__internal_9025fdd0e2f6cfce90dfe2aafab5e5f82ae32073a903248c7a8bf1e831962fdc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d8249bdf573484e7f9b630e9b77b0cfd9a799c1d1a2c01e5c20c28017dc0f75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d8249bdf573484e7f9b630e9b77b0cfd9a799c1d1a2c01e5c20c28017dc0f75->enter($__internal_7d8249bdf573484e7f9b630e9b77b0cfd9a799c1d1a2c01e5c20c28017dc0f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d7a67da95596f6ef32dcab066b31befaa6f7e2c53b7b0bc841d1b4b6a17307c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a67da95596f6ef32dcab066b31befaa6f7e2c53b7b0bc841d1b4b6a17307c0->enter($__internal_d7a67da95596f6ef32dcab066b31befaa6f7e2c53b7b0bc841d1b4b6a17307c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_d7a67da95596f6ef32dcab066b31befaa6f7e2c53b7b0bc841d1b4b6a17307c0->leave($__internal_d7a67da95596f6ef32dcab066b31befaa6f7e2c53b7b0bc841d1b4b6a17307c0_prof);

        
        $__internal_7d8249bdf573484e7f9b630e9b77b0cfd9a799c1d1a2c01e5c20c28017dc0f75->leave($__internal_7d8249bdf573484e7f9b630e9b77b0cfd9a799c1d1a2c01e5c20c28017dc0f75_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
