<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3247824d260d32f39b688239c4644e1cd7f1b855b16897f98bada85a5745048b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_7a478c5de6d5d4a35dc85cb0f20df799af0e75bbceb501b37514b3fe3ebb5a61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a478c5de6d5d4a35dc85cb0f20df799af0e75bbceb501b37514b3fe3ebb5a61->enter($__internal_7a478c5de6d5d4a35dc85cb0f20df799af0e75bbceb501b37514b3fe3ebb5a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_bac1d1610ea6bd471cb904455333e308e12575d75aadba4f7d3106fa829c1534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac1d1610ea6bd471cb904455333e308e12575d75aadba4f7d3106fa829c1534->enter($__internal_bac1d1610ea6bd471cb904455333e308e12575d75aadba4f7d3106fa829c1534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a478c5de6d5d4a35dc85cb0f20df799af0e75bbceb501b37514b3fe3ebb5a61->leave($__internal_7a478c5de6d5d4a35dc85cb0f20df799af0e75bbceb501b37514b3fe3ebb5a61_prof);

        
        $__internal_bac1d1610ea6bd471cb904455333e308e12575d75aadba4f7d3106fa829c1534->leave($__internal_bac1d1610ea6bd471cb904455333e308e12575d75aadba4f7d3106fa829c1534_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f62a7ef06a70deaaec456658e8e41dba7f78827a6c20d7f2a605e403523686b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f62a7ef06a70deaaec456658e8e41dba7f78827a6c20d7f2a605e403523686b6->enter($__internal_f62a7ef06a70deaaec456658e8e41dba7f78827a6c20d7f2a605e403523686b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4a161108af0a224b69f98db68122e1dda30c406e2e9cd684be23a9eb3109fc64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a161108af0a224b69f98db68122e1dda30c406e2e9cd684be23a9eb3109fc64->enter($__internal_4a161108af0a224b69f98db68122e1dda30c406e2e9cd684be23a9eb3109fc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_4a161108af0a224b69f98db68122e1dda30c406e2e9cd684be23a9eb3109fc64->leave($__internal_4a161108af0a224b69f98db68122e1dda30c406e2e9cd684be23a9eb3109fc64_prof);

        
        $__internal_f62a7ef06a70deaaec456658e8e41dba7f78827a6c20d7f2a605e403523686b6->leave($__internal_f62a7ef06a70deaaec456658e8e41dba7f78827a6c20d7f2a605e403523686b6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
