<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_411d9bc16c2e84a83bfeca14c366c4924e50690831933089b6a11feeceb11d88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea6b464c742e49949e51acfd3b691cab985b4a33d4a5c79eb743696baac6d74f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6b464c742e49949e51acfd3b691cab985b4a33d4a5c79eb743696baac6d74f->enter($__internal_ea6b464c742e49949e51acfd3b691cab985b4a33d4a5c79eb743696baac6d74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ee2676312a7ce7d7d3729b68ce01299a99d70ade69cf7159921e98e13abc5113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2676312a7ce7d7d3729b68ce01299a99d70ade69cf7159921e98e13abc5113->enter($__internal_ee2676312a7ce7d7d3729b68ce01299a99d70ade69cf7159921e98e13abc5113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ea6b464c742e49949e51acfd3b691cab985b4a33d4a5c79eb743696baac6d74f->leave($__internal_ea6b464c742e49949e51acfd3b691cab985b4a33d4a5c79eb743696baac6d74f_prof);

        
        $__internal_ee2676312a7ce7d7d3729b68ce01299a99d70ade69cf7159921e98e13abc5113->leave($__internal_ee2676312a7ce7d7d3729b68ce01299a99d70ade69cf7159921e98e13abc5113_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
