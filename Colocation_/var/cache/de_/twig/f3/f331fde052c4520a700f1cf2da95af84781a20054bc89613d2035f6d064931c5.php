<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_34c852ceef7b52721abcdc3038091aa340fc7ddbe5f650e4048141932998aedc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_76713d7a5b3a62f702648178387fa8d0bec4366a4cc6cafdb384d97ee19364ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76713d7a5b3a62f702648178387fa8d0bec4366a4cc6cafdb384d97ee19364ea->enter($__internal_76713d7a5b3a62f702648178387fa8d0bec4366a4cc6cafdb384d97ee19364ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_2bfe172f6d7d76467ac5105cf97db322ddfcebd58aa9fdc41465e1e7dc3f05ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bfe172f6d7d76467ac5105cf97db322ddfcebd58aa9fdc41465e1e7dc3f05ed->enter($__internal_2bfe172f6d7d76467ac5105cf97db322ddfcebd58aa9fdc41465e1e7dc3f05ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76713d7a5b3a62f702648178387fa8d0bec4366a4cc6cafdb384d97ee19364ea->leave($__internal_76713d7a5b3a62f702648178387fa8d0bec4366a4cc6cafdb384d97ee19364ea_prof);

        
        $__internal_2bfe172f6d7d76467ac5105cf97db322ddfcebd58aa9fdc41465e1e7dc3f05ed->leave($__internal_2bfe172f6d7d76467ac5105cf97db322ddfcebd58aa9fdc41465e1e7dc3f05ed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9c82f02a99871dcca16a2c1896c33ddf0ff2a6b975b9c028f4942d561a0ed56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c82f02a99871dcca16a2c1896c33ddf0ff2a6b975b9c028f4942d561a0ed56->enter($__internal_f9c82f02a99871dcca16a2c1896c33ddf0ff2a6b975b9c028f4942d561a0ed56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bca4c25eea587dbe1b9c551becbcbe5a1849507817b8842bbd8ce1681910cc32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca4c25eea587dbe1b9c551becbcbe5a1849507817b8842bbd8ce1681910cc32->enter($__internal_bca4c25eea587dbe1b9c551becbcbe5a1849507817b8842bbd8ce1681910cc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_bca4c25eea587dbe1b9c551becbcbe5a1849507817b8842bbd8ce1681910cc32->leave($__internal_bca4c25eea587dbe1b9c551becbcbe5a1849507817b8842bbd8ce1681910cc32_prof);

        
        $__internal_f9c82f02a99871dcca16a2c1896c33ddf0ff2a6b975b9c028f4942d561a0ed56->leave($__internal_f9c82f02a99871dcca16a2c1896c33ddf0ff2a6b975b9c028f4942d561a0ed56_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
